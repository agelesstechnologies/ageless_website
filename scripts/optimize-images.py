"""Create WebP copies of every PNG/JPEG under public/ (served via public/.htaccess).

Usage: python scripts/optimize-images.py
The copy is saved next to the original as <name>.<ext>.webp (e.g. hero-park.png.webp),
capped at 1920px wide, and kept only if it is smaller than the original.
Re-run after uploading new images; unchanged files are skipped.
"""
import os
from PIL import Image

ROOT = os.path.join(os.path.dirname(os.path.abspath(__file__)), '..', 'public')
SKIP_DIRS = {'vendor', 'node_modules', 'build'}
MAX_WIDTH = 1920
saved = made = 0

for base, dirs, files in os.walk(ROOT):
    dirs[:] = [d for d in dirs if d not in SKIP_DIRS]
    for name in files:
        if not name.lower().endswith(('.png', '.jpg', '.jpeg')):
            continue
        src = os.path.join(base, name)
        dst = src + '.webp'
        if os.path.exists(dst) and os.path.getmtime(dst) >= os.path.getmtime(src):
            continue
        try:
            with Image.open(src) as im:
                im.load()
                if im.width > MAX_WIDTH:
                    im = im.resize((MAX_WIDTH, round(im.height * MAX_WIDTH / im.width)), Image.LANCZOS)
                if im.mode not in ('RGB', 'RGBA'):
                    im = im.convert('RGBA' if 'transparency' in im.info or im.mode in ('P', 'LA') else 'RGB')
                im.save(dst, 'WEBP', quality=80, method=6)
        except Exception as e:
            print('skip', src, e)
            continue
        if os.path.getsize(dst) >= os.path.getsize(src):
            os.remove(dst)
            continue
        made += 1
        saved += os.path.getsize(src) - os.path.getsize(dst)

print(f'{made} WebP files created, {saved / 1048576:.1f} MB smaller')
