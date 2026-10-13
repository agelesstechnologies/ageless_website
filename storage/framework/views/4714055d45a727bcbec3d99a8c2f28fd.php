<!DOCTYPE html>
<html class="<?php echo $__env->make('partials.tailwind.pages-test-1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.website-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldPushContent('tailwind_styles'); ?>">
<head>
<meta charset="UTF-8">
<title>Instagram Hack</title>

    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/tailwind.css')); ?>?v=<?php echo e(filemtime(public_path('assets/css/tailwind.css'))); ?>">
</head>
<body>

<h1>Instagram Hack portel</h1>


<div class="box">
    <input id="userInput" type="text" placeholder="Enter username">
    <br>
    <button onclick="startHack()">START HACK</button>
</div>

<div id="terminal" class="hide"></div>

<script>
// Fake random password generator
function generatePassword() {
    const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*";
    let pass = "";
    for (let i = 0; i < 12; i++) {
        pass += chars[Math.floor(Math.random() * chars.length)];
    }
    return pass;
}

function startHack() {
    const user = document.getElementById("userInput").value;
    if (!user.trim()) {
        alert("Enter  username!");
        return;
    }

    const fakePassword = generatePassword();

    document.getElementById("terminal").classList.remove("hide");
    const term = document.getElementById("terminal");
    term.innerHTML = "";

    const messages = [
        "[*] Connecting to InstaSim servers...",
        "[*] User located: " + user,
        "[*] Initializing  hack sequence...",
        "[*] Scanning virtual environment...",
        "[*] Bypassing imaginary firewall...",
        "[*] Generating spoof data packets...",
        "[*] Creating  password...",
        "",
        ">>> GENERATED PASSWORD: " + fakePassword + " <<<",
        "",
        ">>> HACKING  COMPLETE <<<",
        "Reminder:Passwords were accessed."
    ];

    let i = 0;
    function type() {
        if (i < messages.length) {
            term.innerHTML += messages[i] + "\n";
            i++;
            term.scrollTop = term.scrollHeight;
            setTimeout(type, 700);
        }
    }

    type();
}
</script>

<?php echo $__env->make('partials.website-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/pages/test.blade.php ENDPATH**/ ?>