<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Project;
use App\Models\Faq;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ShootingAndArcherySeeder::class);
        $this->call(CatalogSeeder::class);
        $this->call(InteractiveEntertainmentsSeeder::class);
        $this->call(BumperCarsSeeder::class);
        $this->call(ArcadeGamesSeeder::class);
        $this->call(RopeRiderSeeder::class);
        $this->call(RainbowSlideProductSeeder::class);
        $this->call(SteelSlideProductSeeder::class);
        $this->call(JaintSwingProductSeeder::class);
        $this->call(SoftplayProductSeeder::class);
        $this->call(InteractiveImmersiveZoneProductSeeder::class);
        $this->call(MarineDriveExpressProductSeeder::class);
        $this->call(AlpineCoasterProductSeeder::class);
        $this->call(PaddleBoatsProductSeeder::class);
        $this->call(KayaksProductSeeder::class);
        $this->call(IndriyaAdventureProjectsSeeder::class);
        $this->call(FuntoppiaProjectSeeder::class);
        $this->call(ActivePlanetProjectSeeder::class);
        $this->call(FantasyParkProjectSeeder::class);
        $this->call(GrandLemurianParkProjectSeeder::class);
        $this->call(MistyLandProjectSeeder::class);
        $this->call(HiliteBoulevardProjectSeeder::class);
        $this->call(DtpcErnakulamProjectSeeder::class);
        $this->call(SeaviewParkProjectSeeder::class);

        // Ensure storage directories exist
        $productDir = public_path('storage/products');
        $projectDir = public_path('storage/projects');
        $blogDir = public_path('storage/blogs');
        $faqDir = public_path('storage/faqs');

        if (!File::exists($productDir)) File::makeDirectory($productDir, 0775, true);
        if (!File::exists($projectDir)) File::makeDirectory($projectDir, 0775, true);
        if (!File::exists($blogDir)) File::makeDirectory($blogDir, 0775, true);
        if (!File::exists($faqDir)) File::makeDirectory($faqDir, 0775, true);

        // Copy source images if available
        $copyImg = function($source, $destDir, $filename) {
            $srcPath = public_path('assets/img/' . $source);
            $target = $destDir . '/' . $filename;
            if (File::exists($srcPath) && !File::exists($target)) {
                @File::copy($srcPath, $target);
            }
            return $filename;
        };

        // -------------------------------------------------------------
        // 1. PRODUCTS SEEDER (Manageable via Admin Panel -> Products)
        // -------------------------------------------------------------
        $products = [
            [
                'name' => 'Snow Fantasy',
                'slug' => 'indoor-snow-park-design-installation',
                'image' => 'products/' . $copyImg('snow1.jpeg', $productDir, 'snow-park-attraction.jpg'),
                'short_description' => 'Sub-zero snow play arenas, ice slides, snowfall chambers, and arctic-themed family entertainment attractions.',
                'description' => "Ageless Entertainments engineers complete turnkey indoor snow parks featuring real snowfall generation chambers, sub-zero insulated arenas, ice slides, snow play zones, and arctic climbing walls.\n\nDesigned for malls, resorts, and standalone entertainment centers, each project includes complete thermal insulation engineering, eco-friendly refrigeration, and full guest equipment handling.",
                'sort_order' => 1,
                'status' => 1,
            ],
            [
                'name' => '12D Theatre & Interactive Immersive Rooms',
                'slug' => '12d-theatre-interactive-immersive-rooms',
                'image' => 'products/' . $copyImg('12d4d1.jpg', $productDir, '12d-theatre-system.jpg'),
                'short_description' => 'Multi-sensory 12D dynamic motion theatres and interactive projection mapping game zones.',
                'description' => "Experience next-generation multi-sensory cinema with 6-DOF dynamic pneumatic and electric motion platforms, integrated environmental special effects (wind, rain, fog, lightning, leg ticklers, scent), and interactive shooting light guns.\n\nIdeal for shopping malls, FECs, and theme parks looking for high hourly throughput and fast commercial ROI.",
                'sort_order' => 2,
                'status' => 1,
            ],
            [
                'name' => 'Flying Theatre & Suspended Flight Simulator',
                'slug' => 'flying-theatre-flight-simulator',
                'image' => 'products/' . $copyImg('flying1.jpg', $productDir, 'flying-theatre-simulator.jpg'),
                'short_description' => 'Suspended motion flight systems with curved dome projection and sweeping aerial simulations.',
                'description' => "Our signature flying theatre suspends riders over massive curved dome screens with multi-axis motion synchronization, providing the thrilling sensation of soaring over landscapes, canyons, and fantasy realms with wind and mist integration.\n\nBuilt with international safety standards, dual redundant hydraulic locking, and custom thematic video productions.",
                'sort_order' => 3,
                'status' => 1,
            ],
            [
                'name' => '360° Dome Cinema & Planetarium Systems',
                'slug' => '360-dome-cinema-planetarium',
                'image' => 'products/' . $copyImg('dome1.jpg', $productDir, 'dome-cinema-system.jpg'),
                'short_description' => 'High-resolution geodesic dome projection theatres for immersive visual edutainment.',
                'description' => "Engineered geodesic projection domes featuring ultra-high definition seamless laser projection, 7.1 surround sound audio, and climate control, designed for landmark botanical gardens, science centers, and theme parks.\n\nTurnkey structural design, projection warping algorithms, and certified acoustic treatments included.",
                'sort_order' => 4,
                'status' => 1,
            ],
            [
                'name' => 'Rope Rider & High-Altitude Adventure Circuits',
                'slug' => 'rope-rider-adventure-circuits',
                'image' => 'products/' . $copyImg('rope1.jpg', $productDir, 'rope-rider-attraction.jpg'),
                'short_description' => 'Certified aerial gliders, ziplines, high-rope obstacle courses, and adventure netting.',
                'description' => "High-throughput aerial adventure rides including suspended rope gliders, multi-tier obstacle rope courses, continuous belay ziplines, and aerial net parks certified to international EN and ASTM safety standards.\n\nEngineered with galvanized steel structures, automated safety lifelines, and certified operator control manuals.",
                'sort_order' => 5,
                'status' => 1,
            ],
            [
                'name' => 'Traffic Park Vehicles & Irido Kids EV Circuits',
                'slug' => 'traffic-park-vehicles-irido-ev',
                'image' => 'products/' . $copyImg('toy1.jpg', $productDir, 'traffic-park-vehicles.jpg'),
                'short_description' => 'Interactive children driving tracks, smart EV vehicles, and road safety edutainment.',
                'description' => "Custom electric vehicles, junior traffic lights, road simulations, and automated telemetry tracking designed to teach children traffic safety through interactive, fun driving experiences.\n\nIncludes low-voltage intelligent charging bays, speed restrictors, and durable fiberglass bodywork.",
                'sort_order' => 6,
                'status' => 1,
            ],
        ];

        foreach ($products as $prod) {
            $prod['category_key'] = match ($prod['slug']) {
                'indoor-snow-park-design-installation', 'traffic-park-vehicles-irido-ev' => 'indoor',
                'rope-rider-adventure-circuits' => 'adventure',
                default => 'cinema',
            };
            $prod['category'] = ['indoor' => 'Indoor FEC & Edutainment', 'adventure' => 'Adventure & Aerial Parks', 'cinema' => 'Immersive Cinema & VR'][$prod['category_key']];
            Product::firstOrCreate(['slug' => $prod['slug']], $prod);
        }

        // -------------------------------------------------------------
        // 2. PROJECTS SEEDER (Manageable via Admin Panel -> Projects)
        // -------------------------------------------------------------
        $projects = [
            [
                'title' => 'Wonderland Theme Park High-Thrill Coaster',
                'slug' => 'wonderland-theme-park-high-thrill-coaster',
                'category' => 'Outdoor Theme Park',
                'image' => 'projects/' . $copyImg('roller1.jpg', $projectDir, 'wonderland-coaster.jpg'),
                'short_description' => 'Turnkey engineering, track fabrication, and commissioning of a signature high-thrill coaster.',
                'description' => "Complete turnkey delivery of custom steel track fabrication, electromagnetic safety braking, operator control stations, and IAAPI certified ride commissioning.\n\nDesigned for 700+ riders per hour with comprehensive all-weather corrosion protection.",
            ],
            [
                'title' => 'Munnar Botanical Garden 360° Geodesic Dome Theatre',
                'slug' => 'munnar-botanical-garden-dome-theatre',
                'category' => 'Immersive Cinema',
                'image' => 'projects/' . $copyImg('dome1.jpg', $projectDir, 'munnar-dome-project.jpg'),
                'short_description' => 'Landmark 360-degree panoramic projection dome installed amidst scenic hill country in Kerala.',
                'description' => "Custom geodesic architectural dome design, high-lumen multi-projector blending, acoustic treatment, and climate-controlled seating for 80+ simultaneous guests delivering breathtaking nature and space journeys.",
            ],
            [
                'title' => 'Rope Riding',
                'slug' => 'highland-adventure-rope-rider',
                'category' => 'Adventure & Aerial',
                'image' => 'projects/' . $copyImg('rope1.jpg', $projectDir, 'highland-rope-project.jpg'),
                'short_description' => 'Experience the thrill of rope riding with suspended trails, treetop crossings, and aerial adventure routes.',
                'description' => 'Rope riding brings aerial adventure to life with elevated routes, suspended crossings, and harness-supported rides. Designed for adventure parks, the attraction combines outdoor exploration with an exciting journey above the ground.',
            ],
            [
                'title' => 'Arctic World Turnkey Sub-Zero Snow Experience Arena',
                'slug' => 'arctic-world-snow-arena',
                'category' => 'Indoor FEC',
                'image' => 'projects/' . $copyImg('snow1.jpeg', $projectDir, 'arctic-snow-project.jpg'),
                'short_description' => 'Sub-zero indoor snow entertainment center with dual ice slides, blizzard chamber, and ice cafe.',
                'description' => "Thermal insulation envelope, industrial cryogenic snow guns, temperature management control, and turnkey guest changing infrastructure drawing thousands of visitors daily.",
            ],
        ];

        foreach ($projects as $proj) {
            $proj['category_key'] = ['Immersive Cinema' => 'cinema', 'Adventure & Aerial' => 'adventure', 'Indoor FEC' => 'indoor'][$proj['category']] ?? 'theme';
            Project::firstOrCreate(['slug' => $proj['slug']], $proj);
        }

        // -------------------------------------------------------------
        // 3. FAQS SEEDER (Manageable via Admin Panel -> FAQs)
        // -------------------------------------------------------------
        $faqs = [
            [
                'question' => 'What is the estimated cost to build an amusement park in India?',
                'answer' => 'The investment varies based on land size, attraction mix, and scale. A boutique indoor family entertainment center (FEC) starts from ₹50 Lakhs, while comprehensive regional outdoor theme parks with major rides and roller coasters start from ₹5 Crores. Ageless Entertainments provides end-to-end feasibility studies and budget planning.',
                'sort_order' => 1,
                'status' => 1,
            ],
            [
                'question' => 'How much land is required for setting up an amusement or adventure park?',
                'answer' => 'Indoor FECs and cinema domes can be installed in 3,000 to 25,000 sq.ft inside malls or commercial buildings. Outdoor adventure and amusement parks typically require 1 to 10+ acres depending on coaster footprints, parking, and guest amenities.',
                'sort_order' => 2,
                'status' => 1,
            ],
            [
                'question' => 'What safety certifications and standards do your rides adhere to?',
                'answer' => 'All rides and attractions manufactured by Ageless Entertainments adhere strictly to IAAPI (Indian Association of Amusement Parks and Industries), ASTM International, and European EN safety standards. Each installation undergoes non-destructive testing (NDT), electrical synchronization, and dynamic load testing prior to commissioning.',
                'sort_order' => 3,
                'status' => 1,
            ],
            [
                'question' => 'Do you provide custom attraction design and theme park master planning?',
                'answer' => 'Yes, Ageless Entertainments offers 360-degree turnkey solutions — from concept conceptualization, 3D architectural rendering, and civil layout coordination to in-house manufacturing, erection, and operator staff training.',
                'sort_order' => 4,
                'status' => 1,
            ],
            [
                'question' => 'What is the typical timeline from concept to commercial park opening?',
                'answer' => 'Individual rides or indoor attractions (such as 12D theatres or Dome cinemas) typically take 30 to 90 days. Full-scale amusement or adventure park developments usually span 6 to 12 months from master planning to commercial launch.',
                'sort_order' => 5,
                'status' => 1,
            ],
            [
                'question' => 'Where is Ageless Entertainments located and do you serve all of India?',
                'answer' => 'Our corporate headquarters and fabrication facility are based in Kochi, Kakkanad, Kerala. We provide turnkey design, manufacturing, and installation across all Indian states as well as international destinations.',
                'sort_order' => 6,
                'status' => 1,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(['question' => $faq['question']], $faq);
        }
    }
}
