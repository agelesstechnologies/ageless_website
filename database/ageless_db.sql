SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (`id` int unsigned NOT NULL AUTO_INCREMENT, `migration` varchar(255) NOT NULL, `batch` int NOT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('1','2026_06_15_000000_create_blogs_table','1');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('2','2026_06_15_120848_create_contact_enquiries_table','2');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('3','2026_06_15_130845_create_faqs_table','3');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('4','2026_06_15_153016_create_products_table','3');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('5','2026_06_15_160000_create_projects_table','3');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('6','2026_09_24_000001_add_catalog_details','4');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('7','2026_09_24_000002_categorize_existing_catalog','5');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('8','2026_10_05_000001_update_rope_riding_project_content','6');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('9','2026_10_06_000001_add_product_png_images','7');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('10','2026_10_06_000002_categorize_current_products','8');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('11','2026_09_19_120000_add_image_to_faqs_table','9');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('12','2026_10_06_000003_add_shooting_and_archery_product','9');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('13','2026_10_06_000004_add_interactive_entertainments_product','10');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('14','2026_10_06_000005_add_bumper_cars_product','11');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('15','2026_10_06_000006_update_rope_rider_variants','12');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('16','2026_10_06_000007_remove_rope_rider_feature_points','13');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('17','2026_10_06_000008_remove_bumper_cars_feature_points','14');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('18','2026_10_06_000006_add_arcade_games_product','15');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('19','2026_10_06_000007_remove_arcade_games_features','16');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('20','2026_10_06_000009_add_rainbow_slide_project','17');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('21','2026_10_06_000010_move_rainbow_slide_to_products','18');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('22','2026_10_09_000001_add_steel_slide_product','19');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('23','2026_10_09_000002_add_jaint_swing_product','20');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('24','2026_10_09_000003_add_softplay_product','21');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('25','2026_10_09_000001_update_snow_fantasy_product','22');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('26','2026_10_09_000004_remove_softplay_features','23');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('27','2026_10_09_000004_add_interactive_immersive_zone_product','24');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('28','2026_10_09_000005_add_marine_drive_express_product','25');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('29','2026_10_09_000006_add_alpine_coaster_product','26');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('30','2026_10_09_000007_remove_alpine_coaster_features','27');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('31','2026_10_09_000008_add_paddle_boats_product','28');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('32','2026_10_09_000009_add_kayaks_product','29');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('33','2026_10_09_000010_add_indriya_adventure_projects','30');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('34','2026_10_10_000001_add_funtoppia_project','31');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('35','2026_10_20_000001_add_rope_rider_ride_product','32');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('36','2026_10_20_000002_move_rope_rider_first','33');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('37','2026_10_24_000001_reorder_featured_products','34');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('38','2026_10_27_000001_add_aquarium_product','35');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('39','2026_10_27_000002_add_digital_museum_product','36');
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES ('40','2026_10_27_000003_add_gallery_to_products_and_projects','37');

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (`id` bigint unsigned NOT NULL AUTO_INCREMENT, `title` varchar(255) NOT NULL, `slug` varchar(255) NOT NULL, `excerpt` text, `content` longtext NOT NULL, `image` varchar(255) DEFAULT NULL, `status` enum('draft','published') NOT NULL DEFAULT 'published', `published_at` date DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL, PRIMARY KEY (`id`), UNIQUE KEY `blogs_slug_unique` (`slug`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `blogs` (`id`,`title`,`slug`,`excerpt`,`content`,`image`,`status`,`published_at`,`created_at`,`updated_at`) VALUES ('3','Net Park Manufacturer in India: Turn Your Space  into a High-Revenue Adventure Destination','net-park-manufacturer-in-india-turn-your-space-into-a-high-revenue-adventure-destination','Why Net Parks Are the Future of Entertainment Business','Net Park Manufacturer in India: Turn Your Space into a High-Revenue Adventure Destination In today’s experience-driven market, businesses are constantly searching for innovative ways to attract visitors, increase engagement, and boost revenue. Traditional entertainment setups are 
no longer enough—customers want immersive, interactive, and memorable experiences. This is where net parks are rapidly becoming a game-changing investment. If you are looking for a reliable net park manufacturer in India, Ageless Entertainments delivers cutting-edge solutions designed not just for fun—but for profitability.
 
Why Net Parks Are the Future of Entertainment Business 
Net parks are not just play areas—they are high-engagement adventure zones built using durable, safety-certified net structures. Designed for all age groups, they combine physical activity with excitement, making them one of the most attractive additions to any commercial space.  

But what makes them a smart business investment? 
1. High Footfall Attraction 
A well-designed net park instantly becomes a visual highlight. Whether installed in malls, resorts, or amusement parks, it grabs attention and pulls in crowds. The vibrant structure and visible activity naturally attract visitors. 
2. Maximum Engagement Time 
Unlike traditional rides that last a few minutes, net parks keep users engaged for longer durations. The more time visitors spend, the higher your chances of repeat usage and increased ticket value. 
3. Low Maintenance, High Returns 
Compared to mechanical rides, net parks require minimal maintenance. There are no complex machines or heavy operational costs, making them a cost-effective long-term investment. 
4. Family-Friendly Appeal 
Net parks cater to kids, teenagers, and even adults. This broad audience range ensures consistent traffic throughout the day, weekends, and holidays. 
Ageless Entertainments: Your Trusted Net Park Manufacturer in India When it comes to selecting the right net park manufacturer in India, your choice directly impacts safety, design quality, and return on investment. Ageless Entertainments has positioned itself as a leading name in the industry by delivering innovative, safe, and revenue-driven net park solutions. 
What Sets Ageless Entertainments Apart? 
Custom-Designed for Your Business Goals Every space is different—and so is every business model. Ageless Entertainments creates fully 
customized net parks tailored to your available area, target audience, and revenue strategy. Safety Comes First All net parks are built using premium-quality materials and designed to meet international safety standards. This ensures peace of mind for both operators and customers. 

End-to-End Project Execution 
From concept design and planning to manufacturing and installation, Ageless Entertainments handles everything. You don’t need multiple vendors—just one trusted partner. 

Innovative Adventure Elements 
Their net parks go beyond basic structures. Features like rope riders, obstacle challenges, tunnels, and interactive pathways create a complete adventure experience that keeps customers coming back. 

Where Can You Install a Net Park? 
One of the biggest advantages of choosing a professional net park manufacturer in India like Ageless Entertainments is flexibility. Net parks can be installed in a wide range of locations: 
● Shopping malls looking to increase dwell time 
● Resorts aiming to enhance guest experience 
● Amusement parks expanding their attractions 
● Schools and educational campuses 
● Indoor play zones and family entertainment centers 
● Public parks and tourism destinations 

Whether indoor or outdoor, net parks can be designed to perfectly fit your space. How Net Parks Drive Revenue Growth Investing in a net park is not just about adding an attraction—it’s about creating a consistent revenue stream. 

Multiple Revenue Models 
● Ticket-Based Entry – Charge per session or per hour 
● Combo Packages – Bundle with other attractions 
● Event Hosting – Birthday parties, school trips, group bookings 
● Membership Plans – Encourage repeat visits 

Increased Customer Retention 
A unique and engaging experience ensures that customers stay longer and return more often. This directly boosts your overall business revenue. 
Strong ROI Potential With relatively low operating costs and high user capacity, net parks offer faster return on investment compared to many traditional entertainment options. 

Why Businesses Are Switching to Net Parks 
Across India, entertainment businesses are shifting towards interactive attractions. Here’s why net parks are leading this transformation: 
● They stand out from conventional play zones 
● They are Instagram-worthy, boosting organic promotion 
● They appeal to modern, experience-seeking audiences 
● They require less manpower to operate 
● They can be scaled or expanded easily 
Choosing an experienced net park manufacturer in India ensures you capitalize on all these benefits. 
Your Competitive Advantage Starts Here In a competitive market, the difference between an average space and a high-performing destination lies in the experience you offer. 
A professionally designed net park by Ageless Entertainments gives you: 
● A unique selling proposition 
● Higher customer attraction and engagement 
● Increased revenue opportunities 
● Long-term business growth 
This is not just an installation—it’s a strategic investment in your business success. Partner with Ageless Entertainments Today If you’re planning to upgrade your space or launch a new entertainment project, now is the perfect time to invest in a net park. As a leading net park manufacturer in India, Ageless Entertainments is committed to delivering world-class adventure solutions that combine safety, innovation, and profitability. 

Ready to Build Your Net Park? 
Turn your space into a high-revenue attraction that customers love. 
Contact Ageless Entertainments today to get a customized net park solution tailored to 
your business.','blogs/fEQTWT7jwSthEiJ6LzRHKVA31Ri4PMW6Gn6dmPcI.png','published','2026-10-05 00:00:00','2026-10-05 11:34:53','2026-10-09 11:08:45');
INSERT INTO `blogs` (`id`,`title`,`slug`,`excerpt`,`content`,`image`,`status`,`published_at`,`created_at`,`updated_at`) VALUES ('4','Why Traffic Parks Are the Future of  Edutainment','why-traffic-parks-are-the-future-of-edutainment','Learning has grown far beyond textbooks and schools in modern times. The idea of 
"edutainment," or education through entertainment, has grown to be an effective plan for 
invigorating the minds of kids.','Learning has grown far beyond textbooks and schools in modern times. The idea of "edutainment," or education through entertainment, has grown to be an effective plan for invigorating the minds of kids.

Why Traffic Parks Are the Future of Edutainment 
Learning has grown far beyond textbooks and schools in modern times. The idea of "edutainment," or education through entertainment, has grown to be an effective plan for invigorating the minds of kids. Traffic Parks, interactive locations where kids and adults can learn laws about traffic, road safety, and responsible travelling via pleasant, interactive activities, are among the most unique use of using this approach. 
There has never been such an urgent requirement for teaching people about traffic etiquette in a useful, fascinating way as cities expand and roads get busier. Traffic Parks fill the vacancy by bridge the gap between societal consciousness, education, and happiness. 
What Is a Traffic Park? 
A traffic park is a miniature reproduction of an actual road scene, complete with roads, traffic signals, intersections for pedestrians, signage, and motors. These parks, which have been created to simulate everyday driving circumstances give attendees—particularly kids—a safe ability to explore mobility systems. While learning how to understand traffic signals, follow lanes, and respect pedestrians rights, users can drive tiny cars, ride electrified toy cars, or handle roads. A traffic park is a living atmosphere for learning as rather than a conventional classroom. Every 
lane marking, road sign, as well as light change becomes a part of a thorough safety and responsibility training.  
The Purpose: Learning by Doing 
Traditional traffic education often relies on theory—rules written in books, charts, or lectures. nevertheless this approach is unlikely to result in awareness in the real surroundings. When a concept can be perceived, felt, or experienced, children learn it the best. Experiential learning, a method of instruction to encouraging participation from students, becomes practical by a traffic park. A child understands the lesson through action opposed to memorization when they drive a tiny electric car though a traffic intersection or stop at a red light. Safety education becomes instinctive compared to an abstract principle attributable to this combination of real-world knowledge and entertaining communication.  
Why Traffic Parks Are Perfect for Children 
For children, the idea of driving like adults is fascinating. When they step into a kid-sized traffic park filled with toy cars, working signals, and real roads scaled down to their level, learning becomes a game. 
Here’s what makes it so effective: 
● Hands-on Experience: Kids get to operate EV cars, bicycles, or mini jeeps in a safe, controlled setting. 
● Visual Learning: Traffic signs, colors, and motions help improve observation and recall. 
● Moral Development: Concepts like patience, discipline, and empathy (e.g., giving pedestrians the right of way) are naturally reinforced. 
● Confidence Building: Driving simulations help children develop coordination and decision-making skills. 
This method of interactive education plants lifelong awareness about road safety and responsibility—long before they start driving real vehicles. 
The Role of Manufacturers in Building Better Traffic Parks Modern traffic parks are not just playgrounds; they are carefully planned spaces that call for competence in development, manufacture, and safety legislation. Startups at the forefront of developing such experiences is Kochi, state-based Ageless Entertainments. Ageless Entertainments offers realistic, sturdy, and changeable traffic park vehicles and settings with years of experience in amusement manufacturing. They include the items that follow:  
● Electric Toy Cars & Jeeps designed for children’s use. 
● Adult Training Vehicles for practical driving lessons. 
● Traffic Signals, Signs, and Road Layouts built to mimic real-world conditions. 
● Safety Infrastructure that ensures secure learning for all age groups. 
These parks are also modular, allowing schools, municipalities, and private developers to scale the layout—from a compact children’s zone to a full-fledged urban driving education center. 
Edutainment: The New Learning Revolution While the term "edutainment" sounds modern, the idea of teaching vital life skills via play and 
stories is not novel. However, students\' attention spans are getting shortening in the digital era, and traditional teaching methods find it difficult keep the attention of pupils. Traffic parks offer a great mix of leisure and learning. versus providing passive instruction, these offer participation that is active. Instant feedback: a little one learns swiftly when they fail to stop at a red light. Children participate with others in team learning, sharpening their cooperation and social skills. Simply put, traffic parks give education a memory that goes with students for longer than a 
lecture in a classroom.  
Beyond Kids: Traffic Parks for All Ages While children are the primary focus, traffic parks are equally valuable for adults and new drivers. Many modern parks integrate training simulators, two-wheeler practice tracks, and pedestrian awareness programs. 
Adults can: 
● Practice driving in a low-risk environment. 
● Learn emergency maneuvers safely. 
● Refresh their understanding of traffic laws. These parks can also serve as training hubs for delivery riders, bus drivers, and taxi operators,contributing to safer urban mobility overall. The Social Impact of Traffic Parks Traffic discipline is not merely a personal skill—it’s a social responsibility. Every year, thousands of road accidents occur due to negligence or lack of awareness. Traffic parks play a crucial role in addressing this by: 
● Promoting community awareness campaigns. 
● Educating school groups through structured programs. 
● Partnering with government departments and police forces to enhance public engagement. 
Such initiatives not only build safer citizens but also foster a sense of civic duty and accountability—especially in younger generations. 
A Sustainable Vision for the Future 
Durability is a key consideration in the construction of today\'s leading traffic parks. These parks show an commitment to social and environmental responsibility by using solar-powered illumination, materials that are recyclable, and energy-efficient electric automobiles. Manufacturers like Ageless Entertainments are heading the way in ecological friendly designs that lower operations costs and inspire green learning. Examples of this designs involve electric toy vehicles and low-maintenance park tools. Traffic parks are an ideal complement for its objective to build safer, greener, and more sensitive communities as global society goes toward advanced technology and environmentally friendly 
development.  The Road Ahead Traffic parks were an ideal fusion of recreation, education, and social impact. They leave an ongoing impression that creates responsible citizens, safer drivers, and better-informed communities. Interactive events like traffic parks are unquestionably the method in which of the future for edutainment, citing the growing concentration on technological innovation and experiential 
learning. We\'re moving toward a generation that accepts and appreciates norms over merely following them as more learning institutions, city governments, and brands of entertainment adopt this framework. Traffic parks are eventually about creating awareness, empathy, and safety via amusement rather than merely providing rides and signals.  
About Ageless Entertainments 
Ageless Entertainments, based in Kochi, Kerala, is one of India’s leading manufacturers of amusement rides and edutainment systems. From 12D theaters and trackless trains to EV toy cars, traffic park vehicles, and water rides, the company continues to redefine the amusement experience through innovation, safety, and sustainability. With the brand philosophy “Ride Imagination,” Ageless Entertainments is helping cities and 
institutions build a brighter, safer future—one joyful ride at a time.','blogs/nDRD3kiWXT5xgdZ27bOYHFUc3sxSMrxvEsPhLLjG.png','published','2026-10-05 00:00:00','2026-10-05 11:39:03','2026-10-09 10:48:50');
INSERT INTO `blogs` (`id`,`title`,`slug`,`excerpt`,`content`,`image`,`status`,`published_at`,`created_at`,`updated_at`) VALUES ('5','Inside Our Rope Rider: Design, Safety, and  Thrill Explained','inside-our-rope-rider-design-safety-and-thrill-explained','The Rope Rider is a dynamic adventure attraction that allows participants to traverse 
suspended paths, ropes, and elements at height. Unlike traditional rope courses that focus only 
on static obstacles, the Rope Rider introduces movement, flow, and progression, keeping 
riders constantly engaged.','The Rope Rider is a dynamic adventure attraction that allows participants to traverse suspended paths, ropes, and elements at height. Unlike traditional rope courses that focus only on static obstacles, the Rope Rider introduces movement, flow, and progression, keeping riders constantly engaged.Inside Our Rope Rider: Design, Safety, and Thrill Explained Visitors are no longer satisfied with conventional rides in today\'s competitive world of amusement and adventure parks. They desire incidents that deliver something visually arresting and unforgettable while fusing interest, excitement, and safety. Our Rope Rider attraction, which unites advanced technology, rigorous security measures, and adrenaline adventure into a simple but effective experience, is constructed to precisely meet these expectations. This blog takes you inside our Rope Rider and explains how its excitement components, safety structure, and design philosophy combine to create a top-notch attraction for contemporary amusement parks. Understanding the Rope Rider Concept The Rope Rider is a dynamic adventure attraction that allows participants to traverse suspended paths, ropes, and elements at height. Unlike traditional rope courses that focus only on static obstacles, the Rope Rider introduces movement, flow, and progression, keeping riders constantly engaged. Designed for teenagers, adults, and adventure enthusiasts, the Rope Rider is perfect for 
amusement parks, theme parks, resorts, indoor entertainment centers, and outdoor adventure zones. It encourages not just thrill but also confidence, balance, and physical activity, making it a complete experiential attraction. Thoughtful Design That Maximizes Experience 
1. Modular & Customizable Structure 
One of the core strengths of our Rope Rider is its modular design. Every park has different space constraints, themes, and target audiences. Our Rope Rider can be: 
● Adapted for indoor or outdoor environments 
● Configured for low, mid, or high-level difficulty 
● Customized to fit specific park themes and branding 
This flexibility allows developers to integrate the Rope Rider seamlessly into existing park layouts or new developments. 
2. Compact Footprint, High Impact 
The Rope Rider provides a high thrill-to-space ratio compared to big mechanical rides. It is ideal for parks that seek a luxurious adventure experience without give up a lot of surface area thanks to its vertical designs. While providing a visually striking structure that invites viewers from a distance, this small footprint helps to lowered civil construction costs.  
3. Aesthetic Appeal & Theming 
Design isn’t just about function—it’s about storytelling. Our Rope Rider can be themed to match: 
● Jungle or forest adventures 
● Urban adventure zones 
● Futuristic or industrial concepts 
With carefully chosen materials, colors, and lighting options, the Rope Rider becomes a visual landmark, encouraging visitors to participate and share their experience on social media. Safety: Engineered Into Every Detail Safety is the foundation of our Rope Rider design. Every component is engineered, tested, and installed with strict adherence to international adventure and amusement safety standards. 
1. Certified Materials & Engineering 
All structural components are manufactured using high-grade steel, certified ropes, and corrosion-resistant materials. Each load-bearing element is calculated to exceed operational requirements, ensuring long-term durability and reliability. 
2. Advanced Harness & Belay Systems 
The Rope Rider is equipped with state-of-the-art harness and belay systems that ensure continuous safety throughout the ride. Participants remain securely connected at all times, eliminating the risk of accidental detachment. 
Our systems are designed for: 
● Smooth movement without sudden jerks 
● Easy operation for trained staff 
● Comfort for riders of varying body types 
3. Anti-Fall & Continuous Safety Mechanisms 
Unlike traditional clip-and-move systems, the Rope Rider uses continuous safety lines that prevent incorrect usage. This significantly reduces human error and allows for faster rider flow, improving operational efficiency. 
4. Compliance & Testing 
Before commissioning, each Rope Rider undergoes: 
● Structural load testing 
● Safety system verification 
● Operational simulation 
We also provide complete documentation, training, and maintenance guidelines, ensuring park operators can run the attraction safely and confidently. 
The Thrill Factor: What Makes Rope Rider Exciting 
1. Height & Exposure 
The moment riders step onto the Rope Rider platform, they feel the thrill of height and openness. The elevated paths create an adrenaline rush while still maintaining a strong sense of safety. 
2. Dynamic Movement 
Unlike static rope bridges, the Rope Rider incorporates elements that move, sway, or challenge balance, keeping the experience unpredictable and exciting. Every step requires focus, making the ride mentally engaging as well as physically thrilling. 
3. Progressive Challenge Levels 
Our Rope Rider can be designed with multiple difficulty levels, allowing first-time riders and experienced adventurers to enjoy the attraction equally. This progression encourages repeat participation, increasing the attraction’s overall value. 
4. Social & Interactive Experience 
The Rope Rider is not a solo ride—it’s a shared adventure. Spectators watching from below add to the excitement, while riders motivate each other to complete the course. This social dynamic enhances guest satisfaction and dwell time within the park. Operational Benefits for Park Owners 
Beyond thrill and safety, the Rope Rider offers strong business advantages: 
● High throughput with efficient rider flow 
● Low power consumption compared to mechanical rides 
● Minimal maintenance with long-life components 
● High ROI due to repeat participation and broad age appeal 
Its versatility makes it suitable for ticket-based access, bundled adventure packages, or premium experience zones. Ideal Applications of Rope Rider 
Our Rope Rider is perfectly suited for: 
● Amusement & theme parks 
● Adventure parks & eco-tourism projects 
● Resorts & holiday destinations 
● Indoor family entertainment centers 
● Mall-based adventure zones 
Whether standalone or part of a larger adventure cluster, the Rope Rider elevates the overall attraction mix. 
Conclusion 
The Rope Rider is more than just an adventure attraction—it is a carefully engineered experience that balances design excellence, uncompromising safety, and exhilarating thrill. Built for modern amusement parks, it responds to the growing demand for interactive, active, 
and memorable attractions. By choosing our Rope Rider, park developers invest in an attraction that not only excites visitors but also delivers long-term operational and commercial value. If you’re looking to enhance your park with a next-generation adventure experience, the Rope 
Rider is the perfect choice.','blogs/TCZydPSu2Eg0PFPlabmty6hbd9BzD5soFD3vUeo9.png','published','2026-10-05 00:00:00','2026-10-05 11:49:44','2026-10-09 11:03:50');
INSERT INTO `blogs` (`id`,`title`,`slug`,`excerpt`,`content`,`image`,`status`,`published_at`,`created_at`,`updated_at`) VALUES ('6','Why Interactive & Immersive Zones Are  the Future of Entertainment','why-interactive-immersive-zones-are-the-future-of-entertainment','The entertainment sector is evolving dramatically. Modern audiences can no longer get captured 
by conventional rides and passive attractions. As opposed to just visual entertainment, today\'s 
consumers expect memorable, interactive, and engaging experiences. Interactive and 
immersive zones are currently developing as the entertainment of the future given this evolution 
in how consumers act. 
Businesses invest in immersive solutions to stay competitive, boost foot traffic, and optimize 
profits, from family entertainment centers to amusement parks and retail centers.','The entertainment sector is evolving dramatically. Modern audiences can no longer get captured by conventional rides and passive attractions. As opposed to just visual entertainment, today\'s consumers expect memorable, interactive, and engaging experiences. Interactive and immersive zones are currently developing as the entertainment of the future given this evolution in how consumers act. Businesses invest in immersive solutions to stay competitive, boost foot traffic, and optimize profits, from family entertainment centers to amusement parks and retail centers.
What Are Interactive & Immersive Zones? 
Interactive and immersive zones are technology-driven entertainment spaces designed to fully engage users. These zones combine digital innovation with physical interaction to create a multi-sensory experience. 
They often include:
● Projection-based interactive games 
● Augmented Reality (AR) and Virtual Reality (VR) 
● Motion-sensing environments 
● Gamified digital walls and floors 
● 360-degree immersive experiences 
Unlike traditional attractions, these zones encourage visitors to become part of the experience, making entertainment more dynamic and memorable. 
The Shift in Consumer Expectations 
Modern audiences, especially Gen Z and millennials, expect more than just passive entertainment. They want: 
● Personalization 
● Engagement 
● Shareable moments 
● Unique experiences 
Social media platforms have also played a major role in this shift. Visitors now prefer attractions that are visually appealing and interactive, allowing them to create content and share it online. This has made immersive zones a powerful tool for both entertainment and marketing. 
Key Reasons Interactive & Immersive Zones Are the Future 
1. Higher Engagement Levels 
Interactive zones keep visitors actively involved, increasing their time spent at your venue. The longer visitors stay, the more they spend on tickets, food, and additional experiences. 
2. Strong Revenue Generation 
These zones are designed not just for entertainment but for profitability. Businesses can generate revenue through: 
● Entry tickets 
● Group bookings and events 
● Corporate experiences 
● Brand partnerships 
Compared to traditional rides, immersive attractions offer multiple monetization opportunities. 
3. Social Media-Driven Growth 
Interactive zones are naturally “Instagram-worthy.” Their visual appeal encourages visitors to share photos and videos online, resulting in: 
● Free organic promotion 
● Increased brand visibility 
● Higher footfall 
This makes immersive entertainment a powerful marketing asset. 
4. Easy Content Updates 
One of the biggest advantages of immersive zones is flexibility. Unlike mechanical rides, digital content can be easily updated with new themes, games, or experiences. This keeps the attraction fresh and encourages repeat visits. 
5. Ideal for Indoor Entertainment 
With the rise of mall-based entertainment and urban space limitations, indoor attractions are gaining popularity. Interactive zones are perfect because they: 
● Require less physical space 
● Operate year-round 
● Are not affected by weather conditions 
This makes them a reliable and scalable investment. 
6. Appeals to All Age Groups 
Interactive and immersive zones are versatile and cater to: 
● Children 
● Teenagers 
● Adults 
● Corporate groups 
This wide audience reach ensures consistent footfall and revenue generation. Industry Trends Supporting Growth The global entertainment industry is moving towards experience-driven models. Key trends include: 
● Digital transformation in entertainment 
● Gamification of real-world experiences 
● Increased demand for AR/VR-based attractions 
● Growth of indoor entertainment centers 
Interactive and immersive zones align perfectly with these trends, making them a future-proof investment. 
Why Businesses Are Investing in Immersive Zones 
Amusement park owners, mall developers, and entertainment entrepreneurs are rapidly adopting immersive solutions because they: 
● Differentiate their offerings 
● Attract modern audiences 
● Increase customer retention 
● Deliver faster return on investment 
In a competitive market, offering unique experiences is the key to success. Applications Across Industries Interactive and immersive zones are not limited to amusement parks. They are widely used in: 
● Shopping malls 
● Family entertainment centers (FECs) 
● Theme parks 
● Museums and exhibitions 
● Event spaces 
Their adaptability makes them suitable for various business models. Competitive Advantage for Early Adopters Businesses that invest in immersive entertainment early gain a significant advantage: 
● Strong market positioning 
● Increased brand value 
● Higher customer satisfaction 
● Better long-term profitability 
As demand continues to grow, early adopters will dominate the market. The Future of Entertainment The future of entertainment lies in blending technology with real-world interaction. Innovations such as AI-driven personalization, advanced projection mapping, and mixed reality 
experiences will further enhance immersive zones. In the coming years, entertainment spaces will evolve into fully interactive environments 
where every visitor experience is unique and customizable. 
Conclusion 
Interactive and immersive zones are no longer just an emerging trend—they are the future of the entertainment industry. They offer higher engagement, better revenue opportunities, and unmatched customer experiences. For businesses looking to grow in the amusement and entertainment sector, investing in immersive solutions is not just an option—it is a necessity.','blogs/O2oWuZIvaoYGkMwtWkYj64OVeGb3lcsKdtXDOpSI.png','published','2026-10-09 00:00:00','2026-10-09 10:04:34','2026-10-09 11:00:17');
INSERT INTO `blogs` (`id`,`title`,`slug`,`excerpt`,`content`,`image`,`status`,`published_at`,`created_at`,`updated_at`) VALUES ('7','The Future of Amusement Parks: How AI,  AR, and Sustainable Rides Are Shaping  Next-Gen Entertainment','the-future-of-amusement-parks-how-ai-ar-and-sustainable-rides-are-shaping-next-gen-entertainment','In amusement parks, innovation, imagination, and thrill have always come combined. Innovation 
has been the industry\'s lifeline from the first mechanical carousels to the enormous roller 
coasters of today. But the amusement park trade is on the doorstep of a new phase as visitor 
expectations adjust and concern about sustainability expand everywhere. 
For manufacturers, this is about reinventing the entertainment industry\'s future, not just 
designing rides. The building, operational supervision, and visitor experience of parks are being 
altered by emerging technologies that involve artificial intelligence (AI), augmented reality (AR), 
and sustainable ride designs. 
We\'ll study how manufacturers might keep ahead of the curve in this blog entry as we go into 
the trends that are altering amusement parks.','In amusement parks, innovation, imagination, and thrill have always come combined. Innovation has been the industry\'s lifeline from the first mechanical carousels to the enormous roller coasters of today. But the amusement park trade is on the doorstep of a new phase as visitor 
expectations adjust and concern about sustainability expand everywhere. For manufacturers, this is about reinventing the entertainment industry\'s future, not just designing rides. The building, operational supervision, and visitor experience of parks are being altered by emerging technologies that involve artificial intelligence (AI), augmented reality (AR), and sustainable ride designs. We\'ll study how manufacturers might keep ahead of the curve in this blog entry as we go into the trends that are altering amusement parks.

1. Smart Parks\' Rising: AI at the Heart 
Artificial intelligence is enhancing how consumers interact in a variety of industries, such amusement parks, and is no longer strictly for science labs. 
AI-Powered Visitors Experience 
Take a visitor coming at a theme park where apps that use AI generate a customized plan related to their wait time preferences, age, and preferred type of enthusiasm. They could end up led through the park by virtual assistants whose would offer actual suggestions for rides, meals, 
or events. In order to comply with AI-driven park operations, manufacturers have to create rides that are integrated with advanced technologies. 
Safety and Predictive Maintenance The core concept of amusement parks is safety. Now, artificially intelligent appliances can anticipate electrical issues before they become escalated, thus reducing downtime. Directly combining IoT sensors and AI monitoring systems into ride ideas is now beginning to give manufacturers a competitive edge. Dynamic Story In this blog, we’ll dive into the trends that are redefining amusement parks and explore how the role of an amusement ride manufacturer or theme park ride developer is more critical than ever before. 

2. Augmented Reality: Conflict of Reality and Fantasy The way guests engage with locations is now being revolutionised by the use of augmented 
reality, or AR. AR adds virtual layers from actual environments to improve them, in opposite of Virtual Reality (VR), which replaces the real world. 
AR-Assisted Transit AR enables amusement ride producers to build digital worlds on top of real rides, minimizing the need to put up vast physical physical structures. Imagine experiencing a roller coaster when wear AR glasses that change the track into an automated space highway or a dragon\'s back. As multimedia content can be refreshed often, this technique cuts construction prices and delivers novel and replayable experiences. Captivating Lines Line waiting has never been interesting. Downtime could evolve into a sensation with AR-enabled games and interactive storytelling in line. AR-based designs are currently being explored by leading amusement park builders as a way to improve visitor delight. Persistent Experiences They wish to take the park with him. After leaving the park, users can solve puzzles, interact with characters, or relive rides through AR-based mobile applications. Consequently, theme park ride developers must branch out into digital ecosystems in addition to physical rides. 

3. Sustainability: Developing Greener Transport to Help Build a Greener Future Sustainability is now desired, not given. Operators of amusement parks have been asking for rides with minimal practicable ecological impact as awareness of ecology and climate change expand. Manufacturers will be pushing the industry towards success if they adopt this alteration. Eco-Friendly Materials Innovation in ingredients, like as biodegraded polymers and recycled steel, is lowering the harmful carbon footprint of ride construction. Adopting eco-certified supply chains allows an amusement ride maker retain trust of park operators. Integration for Renewable Energy Water rides utilizing closed-loop systems, renewable energy carousels, and amusement parks with regenerative braking are no longer green ideas. These systems serve parks\' ecological 
goals while reducing costs associated with operation. At the root of this shift are modern theme park ride producers. Small and Effective Design 
Along with their thrills, modern consumers crave sustainability. Compact rides that demand less time and resources but still offer an excellent level of entertainment value get more and more desirable at parks. Energy-conscious ride design is becoming an identity of the top amusement 
park businesses 

4. Immersion and Storytelling: The Fundamentals of Next-Gen Parks 
When technology is vital, however, interaction with people is still paramount. Passengers want to feel if they are a part of a story, not just ride. 
Intellectual Property-Based Attractions The demand for rides based on prominent worlds can be fostered by relationships with film studios, computer game organizations and streaming services. It goes to theme park ride producers who have the ability to collaborate closely regarding these IP integrations. 
Experiences with Numerous Perceptions 
Theaters involving vibration effects, water sprays, wind blasts, and fragrances become becoming increasingly common. 360-degree immersion is accomplished by including these features into rides. In one instance, a jungle ride could consist of mist sprays, earthy perfumes, and dynamic lighting that changes direction timed with the soundscape. 

5. Hybrid Entertainment: Mixing Digital and Physical Settings 
The boundary between physical and digital entertainment grows less clear. Younger generations want digital presence at amusement parks because they became dependent on gaming and online entertainment. Rides with gam Gen Z and Gen Alpha include interactive shooting galleries, automated dark rides, and laser-tag roller coasters. In accordance, the greatest amusement park engineers are establishing gamified attractions that allow people to compete, earn points, and access private elements. Integration for Social Media Viral marketing opportunities are presented by rides that automatically take pictures, shoot videos, or distribute AR-enhanced shots to visitors\' social media accounts. Designing attractions with integrating creating content capabilities is a successful strategy by amusement ride creators. 

6. The Manufacturer\'s Commitment to Future Growth 
The mission of a theme park ride developer or amusement ride maker has never been more critical to the industry. For a company to stay active, companies need to: Invest in R&D: The only way ahead is continuous innovation. Work with Tech Associates: Working together with startups in AI, AR, and sustainability may bring new perspectives. Adopt Flexible Design: Create rides future-proof through letting them adapt to altering tastes. 
Highlight Safety + Sustainability: Use eco-friendly and artificial intelligence-powered technology for security to establish the trust of operators and passengers. 

Conclusion: Accepting the Shift 
The latest phase for creativity is settling on the amusement park sector. AR is making rides more immersive, AI is making parks smarter, and sustainability is making operations more accountable. Parks are still places of wonderment and creative thinking nonetheless since of narrative and experiential elements. What works for the top theme park ride creators, ride manufacturers, and amusement park builders is achieving a balance above creativity and practicality to create rides that excite, incite, and last. Companies who build moments that capture individual visitor\'s imagination over just building rides will be the victors of the future.','blogs/uBfQNx2sL9pzrTXpI07cw5efpjf6BENvkvj68X9s.png','published','2026-10-09 00:00:00','2026-10-09 10:08:41','2026-10-09 11:15:21');
INSERT INTO `blogs` (`id`,`title`,`slug`,`excerpt`,`content`,`image`,`status`,`published_at`,`created_at`,`updated_at`) VALUES ('8','How to Choose the Right Amusement Park  Consultant in India','how-to-choose-the-right-amusement-park-consultant-in-india','India\'s entertainment and relaxation industry is fast growing. From underground entertainment 
centers and trampoline parks to huge amusement centers and adventurous attractions, 
entrepreneurs from every corner of the nation are flocking to the leisure & tourism sector. 
However, building a fantastic amusement park needs more than just creating thrilling rides and 
attractions. Good planning, safety norms, cost control, and operational strategy all assist 
tremendously to the prosperity of any entertainment effort. 
This is when hiring a suitable amusement park consultant becomes crucial. 
A specialist amusement park consultant works with investors to turn their ideas into productive 
and safe entertainment areas. Whether you are thinking about a family entertainment facility, a 
water park, adventure park, trampoline park, dome play area, or themed attraction, finding a 
right advisory partner can save time, minimize risks, and enhance long-term returns.','India\'s entertainment and relaxation industry is fast growing. From underground entertainment centers and trampoline parks to huge amusement centers and adventurous attractions, entrepreneurs from every corner of the nation are flocking to the leisure & tourism sector. However, building a fantastic amusement park needs more than just creating thrilling rides and attractions. Good planning, safety norms, cost control, and operational strategy all assist tremendously to the prosperity of any entertainment effort. This is when hiring a suitable amusement park consultant becomes crucial. A specialist amusement park consultant works with investors to turn their ideas into productive and safe entertainment areas. Whether you are thinking about a family entertainment facility, a water park, adventure park, trampoline park, dome play area, or themed attraction, finding a right advisory partner can save time, minimize risks, and enhance long-term returns. 

Understand the Function of the Amusement Park Consultant. An amusement park consultant is responsible for assisting clients with the preparation, planning, creation, and execution of entertainment projects. Their advice ensures that the project is commercially viable, physically viable, and appealing to tourists. A professional consultant frequently assists with: Planning projects as well as idea creation. The utilization of land and planning layouts Rides + attraction choosing Budget formulation and cost control Safety Requirements and Compatibility Theme art and visitor flow modeling Technical aid and installation guidelines Marketing and operations tactics Experienced amusement park consultants understand industry trends, customer demands, and safety laws, becoming beneficial partners on any entertainment project. Evaluate Industry Experience One of the first things to check while choosing an amusement park consultant in India is industry experience. The amusement industry involves technical engineering, creative design, guest psychology, and operational planning. A consultant with several years of experience can better understand challenges and provide practical solutions. 
Before finalizing a consultant, review: 
● Number of completed projects 
● Types of entertainment projects handled 
● Experience with indoor and outdoor attractions 
● Knowledge of Indian market trends 
● Technical expertise in amusement rides and attractions 
A consultant with diverse project experience can offer better recommendations based on your business goals and budget. Check Their Portfolio 
A strong portfolio reflects the consultant’s expertise and creativity. Ask for previous project details, photographs, concept designs, and client references. Reviewing their completed work helps you understand the quality of planning and execution they can deliver. 
Look for projects such as: 
● Theme parks 
● Adventure parks 
● Water parks 
● Indoor play areas 
● Family entertainment centers 
● Net parks 
● Dome theatres 
● Trampoline parks 
● VR and interactive attractions 
A good amusement park consultant should be able to customize solutions based on project size, target audience, and location. Focus on Safety Standards Safety is one of the most important aspects of any amusement project. A reliable amusement park consultant should prioritize safety during design, equipment selection, and operational planning. Poor safety standards can damage brand reputation and lead to serious operational issues. 
Ensure the consultant follows: 
● International safety guidelines 
● Proper ride installation procedures 
● Quality-certified equipment standards 
● Emergency planning systems 
● Visitor safety management practices 
The consultant should also guide your team regarding maintenance schedules and operational safety protocols. Understand Their Design Capabilities 
Modern amusement parks require attractive and engaging environments that enhance visitor experiences. The right consultant should provide creative and practical design solutions that maximize space utilization and visitor movement. Good design improves operational efficiency while increasing visitor satisfaction. 
Important design considerations include: 
● Theme integration 
● Crowd flow management 
● Attraction placement 
● Landscaping concepts 
● Queue management systems 
● Lighting and visual appeal 
● Social media-friendly attraction zones 
Today’s visitors look for immersive experiences, making creative design an important factor in amusement park success. Analyze Their Knowledge of Market Trends The Indian entertainment industry is evolving quickly. Customers now expect more interactive, technology-driven, and family-friendly attractions. A professional amusement park consultant should understand current industry trends and recommend attractions that match modern consumer preferences. 
Popular trends include: 
● Indoor entertainment centers 
● Adventure-based attractions 
● VR and AR experiences 
● Net parks and rope courses 
● Edutainment attractions 
● Dome theatres 
● Interactive projection games 
● Multi-generational attractions 
Trend awareness helps ensure your project remains competitive in the long term. Evaluate Project Planning and Budget Management 
Budget management is critical for every amusement park project. A good consultant should provide realistic budgeting, detailed project timelines, and efficient resource planning. They should help you avoid unnecessary expenses while ensuring quality standards. 
Key areas to evaluate include: 
● Project feasibility analysis 
● Return on investment estimation 
● Equipment cost planning 
● Installation timelines 
● Maintenance considerations 
● Future expansion possibilities 
Transparent communication regarding project costs helps build trust and prevents financial complications later. 
Read Client Reviews and Testimonials 
Client feedback can provide valuable insights into the consultant’s professionalism and reliability. 
Look for reviews related to: 
● Project quality 
● Timely completion 
● Communication standards 
● Technical support 
● Problem-solving ability 
● Customer satisfaction 
Positive testimonials often indicate strong industry credibility and service quality. Importance of Customization Every amusement project is unique. A successful amusement park consultant should understand your target audience, location, business objectives, and available space before suggesting solutions. Avoid consultants who offer generic concepts without understanding your specific requirements. 
Customized planning helps create a unique entertainment destination that stands out in the market. 
Why Choosing the Right Consultant Matters Selecting the right amusement park consultant in India can directly impact your project’s 
profitability and long-term success. 
The right consultant helps: 
● Reduce operational risks 
● Improve visitor experience 
● Increase revenue opportunities 
● Ensure safety compliance 
● Optimize investment returns 
● Create unique entertainment experiences 
A professionally planned amusement project attracts more visitors, improves customer satisfaction, and strengthens brand reputation. 
India\'s amusement and entertainment company offers many opportunities for financiers, tourism developers, resorts, malls, and business owners. But success in this highly competitive marketplace demands careful planning and skilled support. Choosing the appropriate amusement park consultant is one of the most essential phases in the project development process. From creating ideas and attraction planning to safety 
management and operational advice, a skilled advisor is capable of helping turn ideas into viable entertainment spaces. Before making an assessment, meticulously assess the experience, portfolio, safety standards, design expertise, market intelligence, and after-sales assistance. A good consultation partner may assist you in creating a rewarding, safe, and unforgettable amusement experience for visitors.','blogs/xy4MxvqUcCaKe0CfNGnWUS3YqmLfJeYWgAmIdd2l.png','published','2026-10-09 00:00:00','2026-10-09 10:28:33','2026-10-09 10:55:43');

DROP TABLE IF EXISTS `contact_enquiries`;
CREATE TABLE `contact_enquiries` (`id` bigint unsigned NOT NULL AUTO_INCREMENT, `name` varchar(255) NOT NULL, `email` varchar(255) DEFAULT NULL, `phone` varchar(255) DEFAULT NULL, `subject` varchar(255) DEFAULT NULL, `message` text, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `contact_enquiries` (`id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) VALUES ('1','vijay kj','vijay@gmail.com','7025183885',NULL,'helloo','2026-06-15 12:22:42','2026-06-15 12:22:42');
INSERT INTO `contact_enquiries` (`id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) VALUES ('2','vijay kj','vijay@gmail.com','7025183885',NULL,'helloo','2026-06-15 12:22:43','2026-06-15 12:22:43');
INSERT INTO `contact_enquiries` (`id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) VALUES ('3','test test','test@gmail.com','12345456677',NULL,'helooo','2026-06-15 12:24:42','2026-06-15 12:24:42');
INSERT INTO `contact_enquiries` (`id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) VALUES ('4','test test','test@gmail.com','12345456677',NULL,'helooo','2026-06-15 12:24:42','2026-06-15 12:24:42');
INSERT INTO `contact_enquiries` (`id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) VALUES ('5','dell g5','dell@gmail.com','799883883',NULL,'ttest','2026-06-15 12:26:56','2026-06-15 12:26:56');
INSERT INTO `contact_enquiries` (`id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) VALUES ('6','dell g5','dell@gmail.com','799883883',NULL,'ttest','2026-06-15 12:26:56','2026-06-15 12:26:56');
INSERT INTO `contact_enquiries` (`id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) VALUES ('7','efds fedsf','sdd@gmail.com','65757567',NULL,'4564rtffgfdgd','2026-06-15 12:27:26','2026-06-15 12:27:26');
INSERT INTO `contact_enquiries` (`id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) VALUES ('8','efds fedsf','sdd@gmail.com','65757567',NULL,'4564rtffgfdgd','2026-06-15 12:27:26','2026-06-15 12:27:26');
INSERT INTO `contact_enquiries` (`id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) VALUES ('9','top up','tp@gmail.com','43243432',NULL,'dsffsdf','2026-06-15 12:30:47','2026-06-15 12:30:47');
INSERT INTO `contact_enquiries` (`id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) VALUES ('10','ageless entertainments','ageless@gmail.com','7909877332',NULL,'fgdsgsdfs','2026-06-15 12:35:53','2026-06-15 12:35:53');
INSERT INTO `contact_enquiries` (`id`,`name`,`email`,`phone`,`subject`,`message`,`created_at`,`updated_at`) VALUES ('11','q w','v@gmail.com','5434234234',NULL,'vcxvcv','2026-06-15 12:37:41','2026-06-15 12:37:41');

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (`id` bigint unsigned NOT NULL AUTO_INCREMENT, `question` varchar(255) NOT NULL, `answer` text NOT NULL, `sort_order` int NOT NULL DEFAULT 0, `status` tinyint(1) NOT NULL DEFAULT 1, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL, `image` varchar(255) DEFAULT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `faqs` (`id`,`question`,`answer`,`sort_order`,`status`,`created_at`,`updated_at`,`image`) VALUES ('1','What is the estimated cost to build an amusement park in India?','The investment varies based on land size, attraction mix, and scale. A boutique indoor family entertainment center (FEC) starts from ₹50 Lakhs, while comprehensive regional outdoor theme parks with major rides and roller coasters start from ₹5 Crores. Ageless Entertainments provides end-to-end feasibility studies and budget planning.','1','1','2026-09-21 10:05:42','2026-10-12 14:32:06',NULL);
INSERT INTO `faqs` (`id`,`question`,`answer`,`sort_order`,`status`,`created_at`,`updated_at`,`image`) VALUES ('2','How much land is required for setting up an amusement or adventure park?','Indoor FECs and cinema domes can be installed in 3,000 to 25,000 sq.ft inside malls or commercial buildings. Outdoor adventure and amusement parks typically require 1 to 10+ acres depending on coaster footprints, parking, and guest amenities.','2','1','2026-09-21 10:05:42','2026-09-21 10:05:42',NULL);
INSERT INTO `faqs` (`id`,`question`,`answer`,`sort_order`,`status`,`created_at`,`updated_at`,`image`) VALUES ('3','What safety certifications and standards do your rides adhere to?','All rides and attractions manufactured by Ageless Entertainments adhere strictly to IAAPI (Indian Association of Amusement Parks and Industries), ASTM International, and European EN safety standards. Each installation undergoes non-destructive testing (NDT), electrical synchronization, and dynamic load testing prior to commissioning.','3','1','2026-09-21 10:05:42','2026-09-21 10:05:42',NULL);
INSERT INTO `faqs` (`id`,`question`,`answer`,`sort_order`,`status`,`created_at`,`updated_at`,`image`) VALUES ('4','Do you provide custom attraction design and theme park master planning?','Yes, Ageless Entertainments offers 360-degree turnkey solutions — from concept conceptualization, 3D architectural rendering, and civil layout coordination to in-house manufacturing, erection, and operator staff training.','4','1','2026-09-21 10:05:42','2026-09-21 10:05:42',NULL);
INSERT INTO `faqs` (`id`,`question`,`answer`,`sort_order`,`status`,`created_at`,`updated_at`,`image`) VALUES ('5','What is the typical timeline from concept to commercial park opening?','Individual rides or indoor attractions (such as 12D theatres or Dome cinemas) typically take 30 to 90 days. Full-scale amusement or adventure park developments usually span 6 to 12 months from master planning to commercial launch.','5','1','2026-09-21 10:05:42','2026-09-21 10:05:42',NULL);
INSERT INTO `faqs` (`id`,`question`,`answer`,`sort_order`,`status`,`created_at`,`updated_at`,`image`) VALUES ('6','Where is Ageless Entertainments located and do you serve all of India?','Our corporate headquarters and fabrication facility are based in Kochi, Kakkanad, Kerala. We provide turnkey design, manufacturing, and installation across all Indian states as well as international destinations.','6','1','2026-09-21 10:05:42','2026-09-21 10:05:42',NULL);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (`id` bigint unsigned NOT NULL AUTO_INCREMENT, `name` varchar(255) NOT NULL, `slug` varchar(255) NOT NULL, `image` varchar(255) DEFAULT NULL, `short_description` text, `description` longtext, `sort_order` int NOT NULL DEFAULT 0, `status` tinyint(1) NOT NULL DEFAULT 1, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL, `category_key` varchar(255) NOT NULL DEFAULT 'outdoor', `category` varchar(255) DEFAULT NULL, `spec_badge` varchar(255) DEFAULT NULL, `features` text, `gallery` longtext, PRIMARY KEY (`id`), UNIQUE KEY `products_slug_unique` (`slug`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('20','Amusement park rides','amusement-park',NULL,'Experts in Amusement Park Development & Ride Manufacturing','Experts in Amusement Park Development & Ride Manufacturing
As experienced amusement park builders, we specialize in manufacturing some of the most unique and innovative amusement park rides. Our expertise extends beyond manufacturing—we consult, source, and import the perfect rides tailored to your park’s space, budget, and technical feasibility after detailed analysis.
Our Comprehensive Services:
Custom & Imported Ride Solutions: We manufacture, source, and install the best amusement rides to fit your vision.

Ride Quality & Safety Assurance: Every ride undergoes rigorous quality checks before purchase, installation, and operation.

Ride Installation & Maintenance: We handle installation, testing, and ongoing maintenance to ensure optimal performance.

Annual Maintenance Contracts (AMC): Our advanced amusement park service maintenance software ensures minimal downtime and maximum ride efficiency.
From thrill rides to family attractions, we provide end-to-end solutions to create world-class amusement parks that deliver excitement, safety, and reliability.

 Partner with us to build and maintain the future of amusement!','6','1','2026-10-05 16:29:48','2026-10-21 14:44:35','outdoor','Outdoor Theme Parks',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('21','Snow Park','snow-park','assets/img/snow1.jpeg','India’s Leading Snow Park Brand Snow Fantasy.','India’s Leading Snow Park Brand Snow Fantasy.

At Snow Fantasy, we take pride in being India’s premier snow park brand, delivering an unmatched winter wonderland experience across multiple locations. Our state-of-the-art snow parks create a realistic snowfall adventure, complete with thrilling attractions, icy slides, and immersive activities for all ages.
Why Snow Fantasy?

India\'s Finest Snow Park Brand: A one-of-a-kind indoor snow experience with                    world-class attractions.


Multi-Location Presence: Bringing authentic snowfall fun to various cities across India.


Unique & Immersive Experiences: Enjoy snow slides, igloos, snowfall zones, adventure rides, and more.



Cutting-Edge Technology: Engineered for maximum thrill and safety, ensuring the best snow park adventure.','6','1','2026-10-05 16:32:50','2026-10-21 14:44:35','indoor','Indoor FEC & Edutainment',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('22','Traffic Park Vehicles','traffic-park-vehicles',NULL,'I-Rido – Innovating Traffic Park Vehicles for Education & Fun','I-Rido – Innovating Traffic Park Vehicles for Education & Fun
At I-Rido, we are dedicated to designing and manufacturing innovative traffic park vehicles that make learning traffic rules engaging, interactive, and fun for all ages. Our mission is to create realistic, safe, and creative driving experiences that help kids and adults understand road safety through hands-on learning.
Why Choose Irido?

Specialized Traffic Park Vehicles: We manufacture a diverse range of realistic driving models, including cars, bikes, and custom designs for interactive learning


Safety-First Design: Built with durability, precision, and safety features to ensure a secure experience.


Educational & Engaging: Our vehicles turn traffic rule education into an immersive adventure, making learning effortless and enjoyable.


Custom Solutions for Traffic Parks: We design vehicles to match various traffic park setups, enhancing educational impact.


Brand Punchline: "Ride Imagination"—blending" education with creativity, making every ride a memorable learning journey.

Transform the way traffic safety is taught! 🚦 Explore our range of traffic park vehicles and join us in building a smarter, safer future','6','1','2026-10-05 16:34:57','2026-10-21 14:44:35','indoor','Indoor FEC & Edutainment',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('23','Flying Cinema','flying-cinema','products/bIDPBoOp7xdNYunvQ8UCdSMa8jLKTOa6VLEA1WH6.jpg','WE DESIGN AND INSTALL BEST FLYING CINEMA THEATER ALL OVER INDIA','Fly Cinema by Ageless – A Next-Level Immersive Flying Experience.
Step into the future of cinematic adventure with Fly Cinema by Ageless – an awe-inspiring flying theater experience that takes you on a breathtaking journey across stunning landscapes, iconic destinations, and thrilling adventures like never before!
What is Fly Cinema?

Fly Cinema is a state-of-the-art flying theater attraction that delivers an ultra-realistic 5D motion experience. With a suspended seating system, cutting-edge motion simulation technology, and stunning panoramic visuals, Fly Cinema creates the ultimate sensation of flight, making you feel like you’re soaring through the skies!

Unmatched Features:

🚀 Immersive Flying Experience – Feel the rush of flying over mountains, oceans, and cityscapes.
🎥 Ultra-HD Panoramic Screens – Experience breathtaking visuals on massive dome screens.
💨 Multi-Sensory Effects – Wind, mist, scents, and motion effects bring the adventure to life.
🎢 Dynamic Motion Seats – Smoothly synchronized with the on-screen action for a hyper-realistic ride.
🌎 Customizable Storylines – Choose from adventure, fantasy, space exploration, and real-world locations.


fLYING CINEMA
Fly Cinema by Ageless – A Next-Level Immersive Flying Experience.
Step into the future of cinematic adventure with Fly Cinema by Ageless – an awe-inspiring flying theater experience that takes you on a breathtaking journey across stunning landscapes, iconic destinations, and thrilling adventures like never before!
What is Fly Cinema?

Fly Cinema is a state-of-the-art flying theater attraction that delivers an ultra-realistic 5D motion experience. With a suspended seating system, cutting-edge motion simulation technology, and stunning panoramic visuals, Fly Cinema creates the ultimate sensation of flight, making you feel like you’re soaring through the skies!

Unmatched Features:

🚀 Immersive Flying Experience – Feel the rush of flying over mountains, oceans, and cityscapes.
🎥 Ultra-HD Panoramic Screens – Experience breathtaking visuals on massive dome screens.
💨 Multi-Sensory Effects – Wind, mist, scents, and motion effects bring the adventure to life.
🎢 Dynamic Motion Seats – Smoothly synchronized with the on-screen action for a hyper-realistic ride.
🌎 Customizable Storylines – Choose from adventure, fantasy, space exploration, and real-world locations.

BOOK A PROJECT CONSULTENT
WE DESIGN AND INSTALL BEST FLYING CINEMA THEATER ALL OVER INDIA TALK TO OUR PROJECT CONSULTANT : 9995887711
Why Choose Fly Cinema by Ageless?

✅ World-Class Innovation – Built with cutting-edge flying theater technology.
✅ Custom-Themed Experiences – Tailored to theme parks, entertainment centers, and malls.
✅ Thrilling & Family-Friendly – Perfect for all ages, ensuring an unforgettable attraction.
✅ Seamless Installation & Maintenance – Complete setup, installation, and long-term support provided.

Elevate Your Entertainment Destination

Whether you’re looking to create a highly immersive attraction for a theme park, mall, or entertainment zone, Fly Cinema is the ultimate flying theater experience that guarantees thrill, engagement, and repeat visitors.

📍 Bring the magic of flight to your venue!','0','1','2026-10-05 16:36:28','2026-10-21 14:44:35','cinema','Immersive Cinema & VR',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('24','Dome Cinema360°','dome-cinema360','products/x85PuvwM1Yl41zE5WMcCNsylNknnJM7BrfvQnfgT.jpg','360° Full Dome Cinema by Ageless – The Ultimate Immersive Experience.','360° Full Dome Cinema by Ageless – The Ultimate Immersive Experience.
Step into a world beyond imagination with the 360° Full Dome Cinema by Ageless –A cutting-edge cinematic attraction that fully surrounds audiences with breathtaking visuals and sound. Featuring floor-to-ceiling projection, this next-level experience transports viewers into stunning landscapes, deep space, and beyond.
Key Features:
360° Surround Projection: Ultra-HD visuals covering the entire dome and floor for total immersion.
3D Spatial Sound: Crystal-clear surround audio for a truly lifelike experience.
Customizable Content: Ideal for planetariums, museums, theme parks, and entertainment venues.

Floor projection technology: Enhances depth perception and creates a stunning visual effect.
Turnkey Installation & Support: From concept to execution, we provide seamless setup and maintenance.

Revolutionizing Immersive Entertainment

Whether for education, entertainment, or experiential storytelling, the 360° Full Dome Cinema delivers an unforgettable, fully immersive experience that keeps audiences engaged and amazed.

Bring the future of cinema to your venue!
Contact us today to get started!..','1','1','2026-10-05 16:38:30','2026-10-21 14:44:35','cinema','Immersive Cinema & VR',NULL,NULL,'["assets\\/img\\/products\\/dome-cinema-1.jpeg","assets\\/img\\/products\\/dome-cinema-2.jpeg","assets\\/img\\/products\\/dome-cinema-3.jpeg","assets\\/img\\/products\\/dome-cinema-4.jpeg","assets\\/img\\/products\\/dome-cinema-5.jpeg","assets\\/img\\/products\\/dome-cinema-6.jpeg","assets\\/img\\/products\\/dome-cinema-7.jpeg","assets\\/img\\/products\\/dome-cinema-8.jpeg","assets\\/img\\/products\\/dome-cinema-9.jpeg"]');
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('25','High Rope Rider','rope-rider','assets/img/rope3.jpg','Elevated rope challenges with suspended bridges, balance obstacles, and harness-supported crossings for adventure parks.','High Rope Rider combines elevated rope crossings, suspended stepping elements, and balance challenges in an exciting aerial course. Routes and obstacle difficulty can be tailored to the available site and intended participants.

Course planning includes support structures, access platforms, appropriate safety systems, and operator supervision. Participant requirements and operating procedures are confirmed for the selected configuration.','6','1','2026-10-05 16:46:51','2026-10-21 14:44:35','adventure','Adventure & Rope Courses','Elevated Rope Adventure','','["assets\\/img\\/products\\/rope-rider-1.jpg","assets\\/img\\/products\\/rope-rider-2.jpg","assets\\/img\\/products\\/rope-rider-3.jpg","assets\\/img\\/products\\/rope-rider-4.jpg","assets\\/img\\/products\\/rope-rider-5.jpg"]');
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('26','Hanging Bridges','hanging-bridges','assets/img/products/hanging-bridges.png','Hanging Bridges by Ageless – Where Adventure Meets Nature','Hanging Bridges by Ageless – Where Adventure Meets Nature 
Step into an awe-inspiring experience with Ageless Hanging Bridges – designed to bring thrill, adventure, and breathtaking views to theme parks, eco-resorts, and tourism destinations. Our expertly crafted suspended bridges offer visitors a safe yet exhilarating way to explore the beauty of their surroundings from new heights.
Why Choose Ageless for Hanging Bridges?

✔ Expert Design & Engineering – Built for safety, durability, and stunning aesthetics.
✔ Premium Materials – High-strength steel cables, anti-slip decking, and reinforced safety railings.
✔ Panoramic Views – Experience lush rainforests, deep canyons, and waterfalls from above.
✔ Custom-Made for Any Location – Designed for nature parks, adventure zones, and eco-tourism sites.
✔ Turnkey Installation & Maintenance – From concept to execution, we provide complete solutions.

Types of Hanging Bridges We Offer:
🌿 Canopy Walkways – Suspended bridges for exploring treetops and rainforests.
🌉 Suspension Bridges – High-altitude adventure walkways over valleys, rivers, and cliffs.
🏕 Adventure Bridges – Themed hanging bridges for thrill-seekers and experiential attractions.

Elevate Your Destination with a Signature Hanging Bridge!

Whether for eco-tourism, adventure parks, or scenic resorts, our safely engineered, high-impact hanging bridges create unforgettable visitor experiences.','6','1','2026-10-05 16:47:54','2026-10-21 14:44:35','adventure','Adventure & Aerial Parks',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('27','Trampoline park','trampoline-park','products/KhjtJ8mYgbbqGm78AoIZX8Nfs4i6y0Qko2Sosp7s.jpg','Trampoline Parks by Ageless – Bounce, Flip & Soar!','Trampoline Parks by Ageless – Bounce, Flip & Soar! 

At Ageless, we are leading designers, importers, and installers of world-class trampoline parks, bringing excitement, energy, and innovation to entertainment destinations. Our trampoline parks are engineered for maximum fun and safety, offering a thrilling experience for all ages.
Why Choose Ageless for Your Trampoline Park?

✔ Custom-Designed Parks – Tailored layouts to maximize space, safety, and excitement.
✔ Premium Imported Equipment – We source high-quality trampolines and attractions from top global suppliers.
✔ Engaging Attractions – From free jump zones to dodgeball arenas, slam dunk courts, and foam pits.
✔ Interactive Obstacle Courses – Challenge agility, strength, and coordination with exciting setups.
✔ Safety-First Design – Reinforced structures, shock-absorbent padding, and strict safety standards.
✔ Turnkey Solutions – Complete park setup, from concept to installation and maintenance.

Trampoline Attractions We Offer:

🏀 Slam Dunk Zones – Experience high-flying basketball action.
🏃 Ninja Warrior Courses – Test speed, agility, and strength.
🕹 Interactive Games – Augmented trampolines for next-level challenges.
🎯 Dodgeball & Battle Zones – Action-packed group fun.
💨 Foam Pits & Free-Jump Areas – Safe, soft, and perfect for flips and tricks.

Jumpstart Your Trampoline Park with Ageless!

Whether you\'re building a standalone trampoline park or adding attractions to an existing entertainment space, we create high-energy, safe, and dynamic experiences that keep visitors coming back for more!','6','1','2026-10-05 16:48:51','2026-10-21 14:44:35','indoor','Indoor FEC & Edutainment',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('28','Glass bridge','glass-bridge','products/uYVQc5NEZ7o5imKAG167tEzQCgaSgIm42ISzCK9F.jpg','Glass Bridges by Ageless – A Walk Above the World','Glass Bridges by Ageless – A Walk Above the World
Step into an unforgettable adventure with Ageless Glass Bridges! Designed for tourism, adventure parks, and iconic landmarks, our state-of-the-art glass bridges offer a thrilling, panoramic experience with breathtaking views below.
Why Choose Ageless for Glass Bridges?

✔ Expert Design & Construction – Engineered for strength, beauty, and safety.
✔ Premium Materials – Tempered glass, steel frames, anti-slip coatings, and safety railings.
✔ Strict Safety Standards – Built with advanced technology and international regulations for

maximum durability.
✔ Custom Solutions – Tailored for mountains, cliffs, theme parks, and urban attractions.
✔ Turnkey Installation & Maintenance – Complete service from design to long-term upkeep.

Types of Glass Bridges We Build:

🌄 Glass Skywalks – Walkways extending from cliffs and mountains, offering breathtaking aerial views.
🌉 Glass Suspension Bridges – Transparent bridges suspended by cables, adding thrill and excitement.

Elevate Your Destination with a Spectacular Glass Bridge!','6','1','2026-10-05 16:50:43','2026-10-21 14:44:35','adventure','Adventure & Aerial Parks',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('29','Sky Cycle','sky-cycle','assets/img/products/sky-cycle.png','WE DESIGN AND INSTALL BEST SKY CYCLE RIDES ALL OVER INDIA','What Is Sky Cycling
Sky cycling, also known as aerial cycling, is an adventure activity that combines the thrill of cycling with the awe-inspiring experience of being suspended high above the ground.
Participants pedal on specially designed bicycles attached to cables or tracks, allowing them to cycle through the air with breathtaking views below.
Sky cycling offers a unique and unforgettable adventure for those seeking a thrilling experience with a touch of nature\'s beauty.
Whether you\'re a seasoned adventure junkie or a first-time sky cyclist, the exhilaration and the breathtaking views are sure to leave you with memories that last a lifetime.
 So, gear up and get ready to pedal through the skies for an adventure like no other. Your journey into the world of sky cycling awaits!','6','1','2026-10-05 16:52:50','2026-10-21 14:44:35','adventure','Adventure & Aerial Parks',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('30','Roller Coaster Zipline','roller-coaster-zipline','assets/img/products/roller-coaster-zipline.png','Ageless – Builders of Thrilling Roller Coaster Ziplines','Ageless – Builders of Thrilling Roller Coaster Ziplines 
At Ageless, we are pioneers in designing, building, and installing the next generation of Roller Coaster Ziplines—a heart-pounding fusion of roller coasters and ziplines that delivers an unparalleled adrenaline rush. Engineered for theme parks, adventure destinations, and eco-tourism sites, our custom-built attractions take thrill-seekers to new heights with gravity-defying drops, twists, and high-speed rides.
Why Build Your Roller Coaster Zipline with Ageless?

✔ Expert Design & Engineering – Tailored layouts for maximum thrill, safety, and durability.
✔ High-Speed, Smooth Rides – Experience dynamic twists, dips, and turns like never before.
✔ Cutting-Edge Safety Standards – Built with premium materials, harness systems, and precision engineering.
✔ Custom Configurations – Designed for varied terrains, parks, and adventure spaces.
✔ Turnkey Installation & Maintenance – From concept to execution, we provide complete support.

BOOK A PROJECT CONSULTENT
WE DESIGN AND INSTALL BEST roller coaster ZIPLINE RIDES ALL OVER INDIA TALK TO OUR PROJECT CONSULTANT : 9995887711
Key Features:
🎢 Gravity-Defying Drops – Experience the thrill of steep descents and banked curves.
🌍 Scenic Flight Paths – Soar over mountains, forests, canyons, and water bodies.
🔄 Coaster-Style Twists & Turns – Adding excitement beyond a traditional zipline.
⚙ Advanced Ride Technology – Precision-built for a safe, smooth, and exhilarating experience.

Bring the Future of Adventure to Your Destination!

As experienced builders of world-class adventure attractions, we specialize in designing and installing Roller Coaster Ziplines that elevate your park’s appeal and visitor experience.','6','1','2026-10-05 16:54:20','2026-10-21 14:44:35','adventure','Adventure & Aerial Parks',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('31','Rope Activities','rope-courses','assets/img/products/rope-courses.png','Unleash Your Inner Adventurer: Exploring the Thrills of Rope Courses','Unleash Your Inner Adventurer: Exploring the Thrills of Rope Courses
Rope Courses

Welcome to our world of adventure and excitement, where adrenaline meets safety. As premier builders of adventure rope courses, we pride ourselves on delivering professional and secure experiences that push boundaries and leave lasting memories.
Our team of experienced professionals combines innovation and expertise to design and build adventure rope courses that exceed your expectations. We understand the importance of safety, and that is why we prioritize it at every step of the process.
From the initial concept to the final installation, every element of our rope courses is meticulously crafted to ensure the highest level of safety for participants. When you choose us as your adventure rope course builder, you can expect a customized experience tailored to your unique vision and requirements.
We work closely with you to understand your goals, site specifications, and target audience, allowing us to create a course that perfectly aligns with your needs. Our adventure rope courses feature a wide range of thrilling elements that challenge participants both physically and mentally. From high ropes to low ropes, ziplines to balance beams, each component is carefully designed to provide an exhilarating and unforgettable experience.
By choosing us as your adventure rope course builder, you can trust that you are partnering with professionals who are dedicated to providing exceptional quality, innovation, and safety.
Let us bring your vision to life and create an adventure rope course that will inspire and challenge participants in the most secure and thrilling way possible. Contact us today to embark on an exciting journey of creating unforgettable adventure rope courses that will leave a lasting impact on all who dare to take on the challenge.','6','1','2026-10-05 16:55:08','2026-10-21 14:44:35','adventure','Adventure & Aerial Parks',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('32','Inflatable slide','inflatable-park','assets/img/products/inflatable-park.png','Custom Inflatable Parks & Attractions by Ageless','Custom Inflatable Parks & Attractions by Ageless 

At Ageless, we specialize in designing, sourcing, and manufacturing high-quality inflatable attractions tailored to meet the needs of amusement parks, adventure zones, resorts, and event venues. Whether you\'re looking for inflatable bouncers, water parks, obstacle courses, or interactive games, we provide customized, durable, and safe inflatable solutions to elevate your entertainment space.
Our Inflatable Offerings:

✔ Inflatable Bouncers & Jumping Castles – Safe, fun, and engaging for kids and adults.
✔ Inflatable Water Parks & Pools – Giant water slides, floating obstacle courses, and splash zones.
✔ Inflatable Obstacle Courses – Adventure-packed challenges for thrill-seekers.
✔ Inflatable Sports Arenas – Soccer fields, basketball courts, and multi-sport setups.
✔ Inflatable Interactive Games – Gladiator arenas, wipeout zones, and fun battle challenges.
✔ Inflatable Tunnels & Mazes – Unique walk-through attractions for all ages.
✔ Custom Themed Inflatable Parks – Designed to match your brand, theme, and park concept.

Book a project Consultent
WE DESIGN AND INSTALL BEST inflatable park ALL OVER INDIA TALK TO OUR PROJECT CONSULTANT : 9995887711
Why Choose Ageless for Inflatable Parks?

🎡 Custom-Made Designs – We tailor-make inflatables based on your space, budget, and audience.
🏗 Premium Quality & Safety – Built with high-grade materials, reinforced stitching, and safety features.
🔍 End-to-End Consultation & Sourcing – We help design, source, and install the perfect inflatable attractions.
🔧 Installation & Maintenance – Complete setup, quality checks, and long-term support for durability.

Transform Your Park with High-Quality Inflatables!

Whether you want to create a standalone inflatable park or add inflatable attractions to your amusement space, Ageless delivers fun, safe, and high-performance inflatables designed to keep visitors entertained.','6','1','2026-10-05 16:55:55','2026-10-21 14:44:35','indoor','Indoor FEC & Edutainment',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('33','Zipline','zipline','assets/img/products/zipline.png','Ziplining Adventures by Ageless – Love & Thrill in the Air','Ziplining Adventures by Ageless – Love & Thrill in the Air

Experience the ultimate adventure with your loved one! Ziplining isn’t just for thrill-seekers—it’s a unique, romantic, and exhilarating experience that brings couples closer while soaring through breathtaking landscapes. At Ageless, we design, manufacture, and install world-class zipline experiences tailored for adventure parks, resorts, and tourism destinations
Why Ziplining is the Perfect Couple’s Adventure

💑 Bond Over the Thrill – Feel the rush of adrenaline together, creating unforgettable moments.
🌅 Breathtaking Views – Glide over lush forests, rivers, and mountains for a one-of-a-kind scenic experience.
🎢 Excitement & Connection – Break away from the ordinary with an adventure that strengthens your bond.

Safety & Comfort First

🔧 Premium Engineering – Designed with high-quality materials and cutting-edge safety mechanisms.
🛡 Certified Safety Standards – Every zipline follows strict international safety regulations for a worry-free experience.
👨‍🏫 Expert Training & Supervision – Our trained instructors ensure a smooth and secure ride for all.
Custom Ziplining Experiences by Ageless
✅ Single, Tandem & Parallel Ziplines – Ride solo or fly side-by-side with your partner!
✅ Custom Lengths & Heights – Designed to fit any terrain for the ultimate thrill.
✅ Resort & Park Installations – Perfect for adventure parks, eco-resorts, and tourist destinations.
✅ Turnkey Installation & Maintenance – From design to execution, we provide full-service solutions.

Take Your Adventure to New Heights!','6','1','2026-10-05 16:57:11','2026-10-21 14:44:35','adventure','Adventure & Aerial Parks',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('34','Arcade & VR Solutions','arcade-vr-solutions','products/aAkDPnTlg5hjqospOZaKsfTN660hpK9ih4ZE2or0.jpg','Ageless – Leading Consultant & Importer of Arcade & VR Solutions in India','Ageless – Leading Consultant & Importer of Arcade & VR Solutions in India 
At Ageless, we are India’s leading consultants and importers of arcade game zones and VR entertainment solutions, offering customized, high-quality gaming experiences tailored to your needs. Whether setting up a modern arcade, esports center, or an immersive VR attraction, we provide expert consultation, premium equipment, and seamless installation to help you create a high-revenue gaming destination.

Why Choose Ageless for Your Arcade & VR Setup?

✔ Expert Consultation – We help design and develop arcade game zones and VR attractions based on space, budget, and audience preferences.
✔ Premium Imported Equipment – We source the latest arcade machines, simulators, VR rides, and interactive gaming experiences from top global brands.
✔ Custom Solutions – From classic arcade cabinets to cutting-edge VR simulators, we provide tailor-made gaming setups.
✔ Seamless Installation & Setup – We handle everything from import to on-site installation for a hassle-free experience.
✔ Annual Maintenance Contracts (AMC) – Ensure minimal downtime with our comprehensive service & maintenance plans.

Our Offerings Include:
🎮 Arcade Machines – Racing, shooting, sports, redemption, and classic arcade games.
🕶 VR Simulators & Rides – Fully immersive motion-based VR gaming experiences.
🏎 Esports & Interactive Gaming Zones – Cutting-edge gaming setups for competitive and social gaming.
🔧 Turnkey Solutions – End-to-end support from planning to execution.

Create the Ultimate Gaming Destination with Ageless!

As trusted consultants and importers, we provide state-of-the-art arcade and VR solutions that maximize engagement, thrill, and profitability.','6','1','2026-10-05 17:07:05','2026-10-21 14:44:35','cinema','Immersive Cinema & VR',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('35','Planetarium','planetarium','products/f3J88grcesgPYVR4QRuGaHs5hRNDYj1MXBvvagJj.jpg','Ageless Entertainments Planetarium – Full Content & Experience Blueprint','Ageless Entertainments Planetarium – Full Content & Experience Blueprint
At Ageless Entertainments, we believe that curiosity has no age limit—and the universe is the greatest story ever told.

We are proud to present a world-class digital planetarium experience designed to inspire awe, spark curiosity, and ignite a lifelong passion for science and space in every visitor, from curious children to seasoned stargazers.

What We Offer
360° Dome Shows featuring high-definition visuals and surround sound that take you from Earth to the edge of the universe.

Interactive Exhibits where visitors can explore planets, control space missions, and even walk on Mars in virtual reality.

Live Sky Tours updated with the night sky visible right above your city.

Educational Programs aligned with STEM curriculum for schools and learners of all ages.

Special Events like eclipse viewings, meteor showers, and astronaut meet-and-greets.

Why Ageless Entertainments?
Innovation: Cutting-edge technology in projection, sound, and immersive storytelling.

Accessibility: Programs designed for kids, teens, families, and educators.

Cultural Connection: A blend of science with star lore, mythology, and global sky traditions.

Passion-Driven: Run by a team of educators, artists, and scientists who love sharing the cosmos.','6','1','2026-10-05 17:09:58','2026-10-21 14:44:35','cinema','Immersive Cinema & VR',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('36','Horror House','horror-house',NULL,'Where Fear Meets Fun — Designed & Built by Ageless Entertainments','Horror House
Horror House Attractions
Where Fear Meets Fun — Designed & Built by Ageless Entertainments

Step into the dark side of entertainment with our spine-chilling Horror House experiences. At Ageless Entertainments, we specialize in building custom-themed haunted houses that deliver heart-pounding thrills while maintaining the highest safety and design standards.

Whether you want a permanent haunted attraction or a temporary setup for events and festivals, we offer complete design-to-installation solutions tailored to your space and audience.

🧟‍♂️ Horror House Highlights:
Cinematic Themes (Haunted Mansion, Zombie Apocalypse, Asylum, Witch’s Forest, etc.)

Live Actor Integration (optional for interactive scares)

Sound, Smoke & Light FX for maximum immersion

Animatronics & Motion Sensors

Modular & Scalable Designs 

🎯 Perfect for:
Amusement Parks

Malls & Resorts

Seasonal Events (Halloween, Festivals)

Permanent Installations in FECs (Family Entertainment Centers)

✅ Engineered for safety and built for fear – your visitors will scream with delight!

Build Your Own Adventure Zone!
Ageless Entertainments can combine:

🎈 Inflatable Parks

🔍 Mirror Mazes

👻 Horror Houses

…into a complete entertainment destination, all custom-designed to your space, audience, and theme.','6','1','2026-10-05 17:12:29','2026-10-21 14:44:35','indoor','Indoor FEC & Edutainment',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('37','Mirror Maze','mirror-maze','assets/img/products/mirror-maze.png','Add Mystery, Adventure & Optical Illusion to Your Venue','Mirror Maze Attractions
Add Mystery, Adventure & Optical Illusion to Your Venue

At Ageless Entertainments, we don\'t just build inflatable parks—we create immersive experiences, and our mirror maze installations are a perfect example. These visually stunning, mind-bending attractions are a favorite among kids, teens, and families.

Whether it’s a standalone maze or part of a larger amusement setup, we provide custom-designed mirror mazes that combine fun, illusion, and safe navigation.

Features of Our Mirror Mazes:
Durable, Safe Materials (tempered glass/acrylic options)

LED Lighting Effects for magical ambiance

Custom Themes (Haunted, Futuristic, Jungle, etc.)

Modular Design for flexible space planning

Indoor or Outdoor Installation

Ideal for:

Malls

Theme Parks

Family Entertainment Centers

Resorts

Exhibitions & Events

🎯 Turn any ordinary space into a thrilling maze of reflections and illusions!

Add-On Services
You can bundle your mirror maze with our inflatable park setups to create a complete entertainment zone, boosting footfall and engagement.','6','1','2026-10-05 17:13:20','2026-10-21 14:44:35','indoor','Indoor FEC & Edutainment',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('38','Dome Tents','dome-tents','products/Z5gRTbfOiD2BdcWMvdic3cx52HZT4FZQEO8tubRZ.jpg','Ageless – Leading Manufacturer & Installer of Luxury Dome Tents in India','Ageless – Leading Manufacturer & Installer of Luxury Dome Tents in India 
At Ageless, we are India’s premier manufacturers and installers of high-quality dome tents, designed to offer a luxurious and immersive outdoor experience. Whether for glamping resorts, eco-retreats, adventure camps, or private getaways, our custom-built dome tents provide the perfect blend of nature, comfort, and durability.
Why Choose Ageless for Dome Tents?

✔ Expert Manufacturers – Designed with high-strength, weather-resistant materials for long-lasting performance.
✔ Complete Installation Services – We manufacture, deliver, and install tents at any location.
✔ Luxury Meets Nature – Our glamping tents come with beds, lighting, insulation, and optional indoor plumbing.
✔ Eco-Friendly & Sustainable – Minimal environmental impact, designed with Leave No Trace principles.
✔ Custom Designs & Configurations – Tailored to resorts, adventure parks, and unique hospitality projects.

Dome Tent Features:
🏕 All-Weather Durability – Engineered to withstand wind, rain, and extreme temperatures.
🌍 Panoramic Views – Optional transparent panels for a breathtaking outdoor experience.
🛏 Luxury Interiors – Can include beds, furniture, lighting, and climate control.
♻ Sustainable & Low-Maintenance – Built with eco-conscious materials for long-term use.

From Manufacturing to Installation – We Handle It All!

As trusted dome tent manufacturers and installers, we ensure a seamless experience from design to setup, bringing your glamping vision to life with world-class quality and craftsmanship.','6','1','2026-10-05 17:15:06','2026-10-21 14:44:35','outdoor','Outdoor Theme Parks',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('39','12D Theater','12d-theater','products/XIDDqjUj8u87pcII5C7nSrv68MQc850ZtZiz2yCM.jpg','We Design and install 12D Theater, All over india','About Our 12D Theatre
Step into a whole new world of cinematic adventure with our cutting-edge 12D Theatre. Unlike traditional 3D or 4D theaters, our 12D experience immerses you in a multi-sensory journey where sight, sound, motion, and special effects blend seamlessly to create unforgettable moments.

Our theatre is designed with state-of-the-art motion seats and special environmental effects that bring every movie scene to life. From soaring through the skies to diving deep into the ocean, every second feels real.
Why Choose Our 12D Theatre?
Unmatched Entertainment Value – A unique experience that keeps audiences coming back.

High Return on Investment – Attracts crowds in malls, parks, and resorts.

Customizable Shows – Choose from a wide library of thrilling rides, adventures, and family-friendly films.

Durability & Safety – Built with international quality standards for safety and long life.

Features & Highlights
✨ 12D Motion Seats – Experience dynamic movements: tilt, lift, vibration, and drop effects.
✨ Immersive Visuals – High-resolution 3D projection with lifelike clarity.
✨ Surround Sound – 360° surround sound for crystal-clear audio immersion.
✨ Special Effects – Feel the thrill with wind, rain, snow, smoke, bubbles, scent, leg ticklers, and lightning effects.
✨ Family-Friendly Fun – Safe and exciting for both kids and adults.
✨ Compact & Flexible Design – Can be installed in malls, theme parks, and entertainment centers.','6','1','2026-10-05 17:17:36','2026-10-21 14:44:35','cinema','Immersive Cinema & VR',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('40','Net Park','net-games',NULL,'Net Parks are colorful, safe, and interactive play zones made entirely from woven nets.','✨ Product Overview

Net Parks are colorful, safe, and interactive play zones made entirely from woven nets. Designed for both kids and adults, they combine fun, fitness, and creativity in one unique attraction. With vibrant colors and exciting play modules, Net Parks are perfect for amusement parks, resorts, malls, and public parks.

🎮 Key Features
🧵 Handcrafted Net Structures – Made from strong, durable, and safe materials.

🎨 Vibrant Multi-Color Design – Creates a magical, playful environment.

🌳 Eco-Integrated – Can be installed around trees and open spaces.

🤸 Interactive Play Elements – Includes swings, tunnels, climbing zones, and ball pits.

🛡️ Safe & Secure – Shock-absorbing net flooring and enclosed areas to ensure child safety.

🛠️ Customizable Sizes – Designed as per available area and client needs.

📐 Specifications
Structure Type: Multi-level net play zone

Material: High-strength nylon/polyester nets

Colors: Multicolor (customizable)

Capacity: 20–50 players at a time (depending on size)

Installation Area: Indoor/Outdoor adaptable

Safety Standards: Child-safe design with international quality standards','4','1','2026-10-05 17:19:35','2026-10-21 14:44:35','adventure','Adventure & Aerial Parks',NULL,NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('41','Shooting and Archery','shooting-and-archery','assets/img/products/shooting-and-archery-indoor.jpg','Bring focus, coordination, and friendly competition to your adventure park with dedicated shooting and archery target zones.','Shooting and Archery adds a skill-based experience to adventure parks, resorts, and recreation centres. Dedicated target lanes encourage guests to practise concentration, hand-eye coordination, and accuracy through individual challenges or friendly group competitions.

Plan indoor or outdoor archery lanes with clearly marked shooting positions, target boards, equipment storage, and a supervised participant briefing area. Recreational shooting options and the final equipment selection can be discussed during project planning.

The layout, lane count, target distances, protective barriers, and participant requirements are tailored to the available space and selected equipment. Contact our team to discuss site planning, installation, and operator guidance.','6','1','2026-10-06 12:56:16','2026-10-21 14:44:35','adventure','Adventure & Aerial Parks','Skill-Based Adventure',NULL,'["assets\\/img\\/products\\/shooting-and-archery-indoor.jpg","assets\\/img\\/products\\/shooting-and-archery-outdoor.jpg"]');
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('42','Interactive Zone','interactive-entertainments','assets/img/products/interactive-entertainments.jpeg','Turn floors and walls into immersive play spaces with interactive projection, motion-responsive games, and themed digital environments.','Interactive Entertainments brings digital worlds to life through projected visuals and movement-based play. Guests can step into a virtual forest, explore animated environments, and take part in shared activities across immersive floors and walls. The supplied photograph shows the atmosphere of a themed projection experience.

Experience options include interactive floor games, wall-based challenges, nature-themed discovery zones, and group play. Projection systems, motion sensors, game software, and coordinated sound can be configured to suit the chosen activities and venue. Final interactivity and content depend on the selected system.

Suitable for indoor family entertainment centres, shopping malls, resorts, museums, and children\'s activity spaces. Themes and game difficulty can be planned around the intended audience, with layouts that support both individual exploration and group participation.

Project planning considers usable floor area, ceiling height, ambient lighting, projection surfaces, power, equipment placement, and visitor circulation. Room size, capacity, equipment specifications, content options, and pricing are confirmed after a site assessment. Contact our team to discuss design, installation, and operator guidance.','5','1','2026-10-06 13:04:33','2026-10-21 14:44:35','indoor','Indoor FEC & Edutainment','Immersive Digital Play','Interactive Floor & Wall Projection
Motion-Responsive Game Options
Custom Themed Digital Environments
Individual & Group Activities
Site-Specific Layout Planning',NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('43','Bumper Cars','bumper-cars','assets/img/products/bumper-cars.png','Bring classic dodgem fun to your venue with colourful electric bumper cars and a dedicated arena planned for family entertainment.','Bumper Cars is a classic amusement attraction where riders steer electric cars around a shared arena, enjoying playful turns and gentle bumper-to-bumper contact. Colourful car bodies and wraparound bumpers create an engaging ride experience for family entertainment centres, malls, amusement parks, and resorts. The image is an illustrative concept; final vehicle appearance depends on the selected model.

Vehicle options can include battery-operated models, single or twin seating, themed body designs, and decorative lighting. Power systems, controls, restraints, and operating settings are confirmed for the chosen equipment. Rider age, height, and supervision requirements follow the manufacturer\'s operating guidance.

A dedicated arena is planned with a suitable level floor, perimeter barriers, controlled entry and exit, and clear space for boarding and operator supervision. Fleet size and ride sessions are tailored to the available area and visitor flow. Battery charging and equipment storage are included in planning where applicable.

Our team can discuss car selection, arena layout, installation requirements, operator guidance, and maintenance planning. Dimensions, capacity, power requirements, delivery timelines, and pricing are confirmed after reviewing your site and preferred configuration.','103','1','2026-10-06 13:10:52','2026-10-06 13:10:52','indoor','Indoor FEC & Family Rides','Classic Dodgem Fun','',NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('44','Low Rope Rider','low-rope-rider','assets/img/rope4.jpg','Lower-level rope crossings and balance activities designed for an approachable adventure experience.','Low Rope Rider introduces rope-course adventure through lower-level suspended crossings, stepping elements, and balance activities. The course supports confidence building and coordination, with obstacle difficulty tailored to the intended participants.

Layouts can be planned for resorts, activity zones, and adventure parks. Platform heights, safety equipment, participant eligibility, and supervision requirements are confirmed during site planning.','104','1','2026-10-06 13:14:35','2026-10-06 13:14:35','adventure','Adventure & Rope Courses','Lower-Level Rope Adventure','',NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('46','Arcade Games','arcade-games','products/PuvCShAM5dxvD7J5GJdgIDEnv0HBFgvnET8koQCn.png','Create an exciting indoor gaming zone with arcade cabinets, racing simulators, sports challenges, and redemption game options for family entertainment venues.','Arcade Games brings colourful, hands-on entertainment to family entertainment centres, shopping malls, resorts, and indoor amusement venues. Build a game zone around your audience and available space, with a mix of individual challenges and shared play. The illustration shows a concept layout; final cabinet designs depend on the selected equipment.

Game options can include video arcade cabinets, racing simulators, basketball machines, air hockey, and ticket redemption games. Game titles, player capacity, payment systems, and prize arrangements are confirmed for the selected machines.

Layout planning considers cabinet dimensions, power connections, player movement, spectator space, accessibility, and operator supervision. Equipment selection can be tailored to children, teenagers, and family groups, with an appropriate balance of skill, sports, and simulator experiences.

Contact our team to discuss game selection, floor planning, installation requirements, operator guidance, and maintenance planning. Equipment specifications, availability, delivery timelines, and pricing are confirmed after reviewing your venue and preferred configuration.','105','1','2026-10-06 14:14:29','2026-10-09 15:03:27','indoor','Indoor FEC & Gaming','Indoor Gaming Zone',NULL,NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('47','Rainbow Slide','rainbow-slide','assets/img/projects/rainbow-slide.jpeg','A colourful outdoor rainbow slide with sweeping lanes and a scenic seaside setting.','Rainbow Slide brings a vibrant splash of colour to the amusement park with a wide, multicoloured sliding surface. Set against a seaside backdrop, the attraction creates a striking focal point for the outdoor entertainment area.','106','1','2026-10-06 14:14:35','2026-10-06 14:14:35','theme','Theme & Amusement Parks',NULL,'',NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('48','Steel slide Hi Lite Mall Kozhikode','steel-slide-hi-lite-mall-kozhikode','assets/img/products/steel-slide-hi-lite-mall-kozhikode-1.jpeg','A striking multi-level steel spiral slide at Hi Lite Mall, Kozhikode, featuring polished metal curves and illuminated blue sections that bring the mall atrium to life.','The steel slide at Hi Lite Mall, Kozhikode, winds through the open atrium in a sweeping spiral, creating a distinctive centrepiece across multiple levels. Its polished steel tube and translucent blue sections combine a sleek architectural finish with a playful visual experience. Supported by a central column, the slide follows the curves of the surrounding balconies and adds a memorable attraction to the indoor entertainment space.','107','1','2026-10-09 12:32:12','2026-10-09 12:32:12','indoor','Indoor FEC & Edutainment',NULL,'','["assets\\/img\\/products\\/steel-slide-hi-lite-mall-kozhikode-1.jpeg","assets\\/img\\/products\\/steel-slide-hi-lite-mall-kozhikode-2.jpeg"]');
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('49','Jaint Swing','jaint-swing','assets/img/products/jaint-swing-1.jpeg','An outdoor giant swing attraction with a towering support frame and suspended riders soaring through an open-air arc.','Jaint Swing brings a dramatic aerial experience to outdoor adventure destinations. Riders are suspended beneath a tall support structure and swing through the open air, taking in views of the surrounding landscape. The large frame and sweeping swing movement create a striking focal point for an adventure park.','108','1','2026-10-09 12:38:12','2026-10-09 12:38:12','adventure','Adventure & Outdoor',NULL,'','["assets\\/img\\/products\\/jaint-swing-1.jpeg","assets\\/img\\/products\\/jaint-swing-2.jpeg"]');
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('50','Softplay','softplay','assets/img/products/softplay.jpeg','Colourful indoor softplay areas with ball pits, slides, climbing zones, and multi-level play structures for children.','Softplay brings colourful, active play to indoor family entertainment spaces. Ball pits, slides, climbing zones, and interconnected play structures give children a variety of activities to explore. Discuss layouts, play elements, and space requirements for shopping malls, family entertainment centres, and dedicated indoor play venues.','109','1','2026-10-09 12:45:05','2026-10-09 12:45:19','indoor','Indoor Entertainment',NULL,'',NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('51','Interactive & Immersive Zone','interactive-immersive-zone','assets/img/products/interactive-immersive-zone.jpeg','Immersive digital environments with interactive walls, responsive visuals, and engaging themed experiences.','Interactive & Immersive Zone brings digital worlds to life through responsive visuals and themed environments. Guests can explore interactive walls and immersive scenes that encourage movement, discovery, and shared play. Discuss content themes, interaction options, and space requirements for family entertainment centres, shopping malls, museums, and indoor attractions.','3','1','2026-10-09 12:58:51','2026-10-09 12:58:51','cinema','Immersive Cinema & VR',NULL,'Interactive Walls
Immersive Visual Environments
Themed Digital Experiences',NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('52','Marine Drive Express','marine-drive-express','assets/img/products/marine-drive-express-1.jpeg','A colourful family train attraction inspired by the waterfront promenade at Marine Drive, Kochi.','Marine Drive Express brings a playful train experience to waterfront promenades, parks, and family entertainment destinations. A colourful locomotive and character-themed passenger carriages create a welcoming attraction for children and families. Discuss route layout, boarding areas, themed ticket kiosks, and installation requirements with Ageless Entertainments.','111','1','2026-10-09 13:03:48','2026-10-09 13:03:48','theme','Outdoor Theme Park',NULL,'Colourful Themed Locomotive
Character-Themed Passenger Carriages
Family Train Experience','["assets\\/img\\/products\\/marine-drive-express-1.jpeg","assets\\/img\\/products\\/marine-drive-express-2.jpeg"]');
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('53','Alpine Coaster','alpine-coaster','assets/img/products/alpine-coaster.webp','An outdoor rail-guided coaster experience with winding turns and scenic surroundings for adventure parks and leisure destinations.','Alpine Coaster brings an exciting rail-guided ride to outdoor adventure parks and leisure destinations. Individual coaster carts follow a winding track through scenic surroundings, creating a memorable attraction that complements the landscape. Discuss terrain, track layout, boarding areas, and installation requirements with Ageless Entertainments to plan an experience suited to your venue.','112','1','2026-10-09 15:15:28','2026-10-09 15:15:28','adventure','Adventure Park','Scenic Outdoor Ride','',NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('54','Paddle Boats','paddle-boats','assets/img/products/paddle-boats-1.jpg','A relaxed water recreation experience for lakes, resorts, and family leisure destinations.','Paddle Boats bring a relaxed boating experience to lakes, resorts, and outdoor leisure destinations. Swan-themed pedal boats offer a playful way for families to enjoy the water, while paddle-powered recreational boats add variety to a waterfront attraction. Discuss boat selection, boarding arrangements, operating areas, and guest safety requirements with Ageless Entertainments to plan an experience suited to your venue.','113','1','2026-10-09 15:34:53','2026-10-09 15:34:53','theme','Outdoor Theme Park','Water Recreation','','["assets\\/img\\/products\\/paddle-boats-1.jpg","assets\\/img\\/products\\/paddle-boats-2.jpg"]');
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('55','Kayaks','kayaks','assets/img/products/kayaks.jpg','A paddle-powered water adventure for resorts, lakes, and outdoor leisure destinations.','Kayaks bring an engaging paddling experience to waterfront resorts, lakes, and outdoor leisure destinations. Guests can explore the water at their own pace while enjoying an active outdoor adventure. Discuss kayak selection, launch access, designated paddling areas, and guest safety arrangements with Ageless Entertainments to plan an experience suited to your venue.','114','1','2026-10-09 15:36:41','2026-10-09 15:36:41','theme','Outdoor Theme Park','Water Adventure','',NULL);
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('56','Rope Rider','rope-rider-ride','assets/img/products/rope-rider-1.jpg','Not just a ride. The reason they visit.','A safe & family-friendly attraction designed for everyone. A crowd magnet that will keep attracting new customers.','2','1','2026-10-20 17:00:44','2026-10-21 14:38:43','adventure','Adventure & Aerial Parks',NULL,'Top-tier safety features
Riders control speed and direction
Two-directional movement
Kids, teens, & seniors alike enjoy this ride','["assets\\/img\\/products\\/rope-rider-1.jpg","assets\\/img\\/products\\/rope-rider-2.jpg","assets\\/img\\/products\\/rope-rider-3.jpg","assets\\/img\\/products\\/rope-rider-4.jpg","assets\\/img\\/products\\/rope-rider-5.jpg"]');
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('57','Dino Park','dino-park','assets/img/products/dino-park-1.jpg','An immersive prehistoric world with sculpted rock walls, fossil displays, and dramatic lighting.','Dino Park takes guests on a walk through a themed prehistoric world, with sculpted rock walls, life-size fossil skeleton displays, carved relief artwork, and atmospheric lighting. Ageless Entertainments can plan the theming, layout, and visitor flow to suit your park, mall, or resort.','115','1','2026-10-27 12:38:50','2026-10-27 12:38:50','theme','Outdoor Theme Park','Themed Experience','','["assets\\/img\\/products\\/dino-park-1.jpg","assets\\/img\\/products\\/dino-park-2.jpg"]');
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('58','Aquarium','aquarium','assets/img/products/aquarium-1.jpg','Discover a vibrant underwater world with captivating marine life and immersive aquarium displays.','Bring the underwater world closer with an aquarium attraction featuring marine life, themed displays, and atmospheric lighting. Create an engaging experience for visitors of all ages in parks, malls, and family entertainment destinations.','116','1','2026-10-27 12:43:02','2026-10-27 12:43:02','indoor','Indoor Entertainment','Marine Life Experience','','["assets\\/img\\/products\\/aquarium-1.jpg","assets\\/img\\/products\\/aquarium-2.jpg"]');
INSERT INTO `products` (`id`,`name`,`slug`,`image`,`short_description`,`description`,`sort_order`,`status`,`created_at`,`updated_at`,`category_key`,`category`,`spec_badge`,`features`,`gallery`) VALUES ('59','Digital Museum','digital-museum','assets/img/products/digital-museum.jpg','Explore immersive themed exhibits that bring discovery and storytelling to life.','Create a memorable visitor journey with a Digital Museum combining themed environments, atmospheric lighting, and engaging visual storytelling. Designed for parks, malls, and family entertainment destinations, the experience invites guests of all ages to explore and discover.','117','1','2026-10-27 12:45:43','2026-10-27 12:45:43','indoor','Indoor Entertainment','Immersive Exhibits','',NULL);

DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (`id` bigint unsigned NOT NULL AUTO_INCREMENT, `title` varchar(255) NOT NULL, `slug` varchar(255) NOT NULL, `category` varchar(255) DEFAULT NULL, `image` varchar(255) DEFAULT NULL, `short_description` text, `description` longtext, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL, `category_key` varchar(255) NOT NULL DEFAULT 'theme', `location` varchar(255) DEFAULT NULL, `year` varchar(255) DEFAULT NULL, `capacity` varchar(255) DEFAULT NULL, `scope` text, `specifications` text, `sort_order` int NOT NULL DEFAULT 0, `status` tinyint(1) NOT NULL DEFAULT 1, `gallery` longtext, PRIMARY KEY (`id`), UNIQUE KEY `projects_slug_unique` (`slug`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `projects` (`id`,`title`,`slug`,`category`,`image`,`short_description`,`description`,`created_at`,`updated_at`,`category_key`,`location`,`year`,`capacity`,`scope`,`specifications`,`sort_order`,`status`,`gallery`) VALUES ('64','Indriya Net Park','indriya-adventure-park',NULL,'assets/img/projects/indriya-adventure-park.avif','Indriya Adventure Park (often searched as Indriya Net Park) is a waterfront adventure destination located in Kuzhupilly near Cherai, Kochi, Kerala.','Indriya Adventure Park (often searched as Indriya Net Park) is a waterfront adventure destination located in Kuzhupilly near Cherai, Kochi, Kerala. Uniquely nestled on a narrow strip of land between the serene backwaters (lagoon) and the Arabian Sea beach, it offers a blend of aerial high-wire courses and water sports.

Key Attractions & Activities

The park separates its core thrill experiences into sky-based high-wire challenges and water-bound activities:
• Sky Rope Adventure: Staged on a 50-foot-high rectangular circuit, this features multi-stage challenges including a Glass Bridge, Sky Cycle, Zip Line, hanging bridge,• log-to-log walk, and plank walks.
• Water Sports & Activities: Utilizes the serene brackish backwaters for kayaking, water cycling, stand-up paddling (surfing), pedal boats, country boats, and a floating bridge.
• Family & Kids Area: Includes a dedicated kids\' playground area, swings, slides, and space for picnics. There is also a rain dance setup available for group fun.

Visitor Information & Pricing

• Location: MLA Road, Kuzhupilly, Cherai, Kochi, Kerala 682501. It operates adjacent to the Indriya Sands Resort.
• Timings: Open daily from 8:00 AM to 5:30 PM.
• Ticket Prices:
	• Kids Play Area Only: ₹150 per child.
	• Air Rides Package: Around ₹600 (includes 3 major sky rides like zip line, sky cycle, and hanging bridge).
	• Full Adventure Package: Ranges between ₹900 to ₹1,500 per person depending on group packages and seasonal promotional discounts.
• Facilities: Inside parking space, public restrooms, wheelchair-accessible entrance, and standard safety gear with trained handlers on-site.','2026-10-09 15:55:25','2026-10-12 14:46:02','theme',NULL,NULL,NULL,NULL,NULL,'0','1','["assets\\/img\\/projects\\/indriya-adventure-park.avif","assets\\/img\\/projects\\/indriya-adventure-park-entrance.jpg","assets\\/img\\/projects\\/indriya-sky-cycling.webp"]');
INSERT INTO `projects` (`id`,`title`,`slug`,`category`,`image`,`short_description`,`description`,`created_at`,`updated_at`,`category_key`,`location`,`year`,`capacity`,`scope`,`specifications`,`sort_order`,`status`,`gallery`) VALUES ('65','Indriya Adventure Park Entrance','indriya-adventure-park-entrance','Adventure & Aerial Parks','assets/img/projects/indriya-adventure-park-entrance.jpg','A colourful dolphin-themed entrance at Indriya Adventure Park.','The entrance at Indriya Adventure Park features dolphin artwork, an ocean-inspired signboard, and a bright structural frame overlooking the waterfront.','2026-10-09 15:57:30','2026-10-12 14:46:02','adventure','Ernakulam, Kerala',NULL,NULL,'','','1','0','["assets\\/img\\/projects\\/indriya-adventure-park.avif","assets\\/img\\/projects\\/indriya-adventure-park-entrance.jpg","assets\\/img\\/projects\\/indriya-sky-cycling.webp"]');
INSERT INTO `projects` (`id`,`title`,`slug`,`category`,`image`,`short_description`,`description`,`created_at`,`updated_at`,`category_key`,`location`,`year`,`capacity`,`scope`,`specifications`,`sort_order`,`status`,`gallery`) VALUES ('66','Sky Cycling','indriya-sky-cycling','Adventure & Aerial Parks','assets/img/projects/indriya-sky-cycling.webp','An elevated cycling adventure above the water at Indriya Adventure Park.','Sky Cycling offers a suspended bicycle experience above the water. The attraction combines elevated cycling with views of the surrounding waterfront and greenery.','2026-10-09 15:57:30','2026-10-12 14:46:02','adventure','Ernakulam, Kerala',NULL,NULL,'','','2','0','["assets\\/img\\/projects\\/indriya-adventure-park.avif","assets\\/img\\/projects\\/indriya-adventure-park-entrance.jpg","assets\\/img\\/projects\\/indriya-sky-cycling.webp"]');
INSERT INTO `projects` (`id`,`title`,`slug`,`category`,`image`,`short_description`,`description`,`created_at`,`updated_at`,`category_key`,`location`,`year`,`capacity`,`scope`,`specifications`,`sort_order`,`status`,`gallery`) VALUES ('67','Funtoppia','funtoppia','Indoor Gaming & Family Entertainment','assets/img/projects/funtoppia-gaming-zone.jpg','A planned indoor gaming destination in Kochi bringing together arcade games, dedicated gaming zones and multiplayer stations for friends and families.','Funtoppia is a planned indoor entertainment destination at HiLITE Mall Boulevard, near Fort Kochi, Kochi. Designed for friends, families and gaming enthusiasts, the project brings a lively mix of gaming zones, arcade games and multiplayer stations together under one roof.

Gaming zones: Dedicated spaces for casual play and interactive gaming will let visitors explore different experiences at their own pace.

Arcade games: The planned arcade mix includes racing games, basketball challenges, rhythm games and classic video-game cabinets, offering quick rounds and friendly competition.

Multiplayer stations: Shared gaming stations will support head-to-head matches and cooperative play, giving groups a place to team up and enjoy games together.

Family entertainment: The concept combines individual challenges with group activities for mall visits, weekend outings and social get-togethers. The final game selection and opening schedule will be announced as the project develops.','2026-10-10 09:51:41','2026-10-12 14:46:40','indoor','HiLITE Mall Boulevard, near Fort Kochi, Kochi, Kerala',NULL,NULL,'Dedicated gaming zones, Arcade game area, Multiplayer gaming stations, Family and group entertainment','Project stage: Planned | Format: Indoor gaming and family entertainment | Attractions: Arcade games and interactive gaming zones | Group play: Competitive and cooperative multiplayer stations','3','1','["assets\\/img\\/projects\\/funtoppia-arcade-games.jpg","assets\\/img\\/projects\\/funtoppia-multiplayer-games.jpg"]');
INSERT INTO `projects` (`id`,`title`,`slug`,`category`,`image`,`short_description`,`description`,`created_at`,`updated_at`,`category_key`,`location`,`year`,`capacity`,`scope`,`specifications`,`sort_order`,`status`,`gallery`) VALUES ('69','Active Planet','active-planet','Theme & Amusement Parks','assets/img/projects/active-planet-entrance.webp','Active Planet at Manimala, Kuttiadi is a colourful family fun park with a rainbow entrance arch, a tall slide tower and a lively children\'s play area.','Active Planet is a family entertainment park at Manimala, Kuttiadi, Kerala, designed to keep visitors of every age entertained from the moment they arrive. A bright rainbow-coloured entrance arch topped with the Active Planet name sets a cheerful, welcoming tone for the whole park.

A tall slide tower with twisting yellow and red slides rises above the park, surrounded by green hills and coconut groves. Below it, a landscaped children\'s play area with colourful play structures, patterned play surfaces and bright umbrellas gives younger guests a safe and lively space to explore.

The park brings together fun, colour and open space so that friends and families can spend a relaxed day out in the Kerala countryside.','2026-10-12 14:55:07','2026-10-12 14:55:07','theme','Manimala, Kuttiadi, Kerala',NULL,NULL,'Park theming and entrance design, Slide tower, Children\'s play area, Landscaping and visitor amenities','Location: Manimala, Kuttiadi, Kerala | Format: Family fun park | Attractions: Slide tower and children\'s play area | Audience: Families and children','4','1','["assets\\/img\\/projects\\/active-planet-slide-tower.webp","assets\\/img\\/projects\\/active-planet-play-area.jpg"]');
INSERT INTO `projects` (`id`,`title`,`slug`,`category`,`image`,`short_description`,`description`,`created_at`,`updated_at`,`category_key`,`location`,`year`,`capacity`,`scope`,`specifications`,`sort_order`,`status`,`gallery`) VALUES ('70','Fantasy Park','fantasy-park','Theme & Amusement Parks','assets/img/projects/fantasy-park-wave-pool.webp','Fantasy Park is a lively water park with a wave pool, multi-level splash zones and colourful water slides for families to cool off and play together.','Fantasy Park is a family water park built around fun, colour and refreshing play. A large wave pool with gentle rolling waves lets visitors of all ages splash, float and cool off, while a themed backdrop and bright slide tower overlook the water.

A multi-level splash zone with twisting water slides, play decks and playful animal figures gives children and teenagers plenty to climb, slide and explore. The slides drop into shallow, safe landing pools, so every ride ends with a splash.

Set among palm trees and green hills, the park combines water rides, shaded seating areas and open space, making it an easy full-day outing for friends and families.','2026-10-12 15:01:12','2026-10-12 15:01:12','theme','Kerala',NULL,NULL,'Wave pool, Multi-level water play structure, Water slides, Themed landscaping and visitor amenities','Format: Family water park | Attractions: Wave pool, splash zone and water slides | Setting: Open-air, surrounded by palms and hills | Audience: Families, children and groups','5','1','["assets\\/img\\/projects\\/fantasy-park-water-slides.jpg","assets\\/img\\/projects\\/fantasy-park-splash-zone.jpg"]');
INSERT INTO `projects` (`id`,`title`,`slug`,`category`,`image`,`short_description`,`description`,`created_at`,`updated_at`,`category_key`,`location`,`year`,`capacity`,`scope`,`specifications`,`sort_order`,`status`,`gallery`) VALUES ('71','Grand Lemurian Park','grand-lemurian-park','Theme & Amusement Parks','assets/img/projects/grand-lemurian-park-entrance.jpg','Grand Lemurian Park is a seaside amusement park in Kanyakumari, Tamil Nadu, with a mermaid-themed entrance, a rainbow slide, family rides and a pirate ship swing facing the ocean.','Grand Lemurian Park is an amusement park in Kanyakumari, Tamil Nadu, set on the shoreline where visitors can enjoy rides with views of the sea. The park opens through a themed entrance gate with a traditional tiled roof, a friendly mermaid and coral and starfish decoration, giving the park a bright underwater-inspired identity.

Inside, a colourful family ride zone brings together a Ferris wheel, a spinning ride, a rainbow-striped slide and a white dome attraction, all surrounded by vibrant roofs and painted walkways. A pirate ship swing, built in a wooden ship design, rises beside the waves and offers riders a thrilling swing with the ocean as the backdrop.

With its mix of themed architecture, family rides and sea views, the park is designed to be a lively day-out destination for visitors and tourists to Kanyakumari.','2026-10-12 15:08:25','2026-10-12 15:08:25','theme','Kanyakumari, Tamil Nadu',NULL,NULL,'Themed entrance gate, Family amusement rides, Rainbow slide, Pirate ship swing, Dome attraction, Park landscaping and visitor facilities','Location: Kanyakumari, Tamil Nadu | Format: Seaside amusement park | Attractions: Pirate ship swing, Ferris wheel, rainbow slide and dome attraction | Audience: Families, children and tourists','6','1','["assets\\/img\\/projects\\/grand-lemurian-park-aerial.jpg","assets\\/img\\/projects\\/grand-lemurian-park-pirate-ship.jpg"]');
INSERT INTO `projects` (`id`,`title`,`slug`,`category`,`image`,`short_description`,`description`,`created_at`,`updated_at`,`category_key`,`location`,`year`,`capacity`,`scope`,`specifications`,`sort_order`,`status`,`gallery`) VALUES ('72','Misty Land Natural Park','misty-land-natural-park','Adventure & Aerial Parks','assets/img/projects/misty-land-hilltop.jpg','Misty Land Natural Park is a hilltop nature destination with a glass skywalk, sweeping views over green hills and a landscaped garden area for family outings.','Misty Land Natural Park is a hilltop nature and leisure destination built on a green ridge, with misty hills and forested valleys stretching in every direction. The park is laid out along a winding path that connects its visitor buildings, landscaped gardens and viewing areas while keeping the natural character of the hill intact.

A glass skywalk is the highlight of the park. Visitors can step out onto a transparent platform high above the treetops and look straight down to the valley below, with railings on all sides and open views of the surrounding hills. A white dome on the hillside adds a distinctive landmark to the park.

Beside the main building, a landscaped courtyard with a lily pond, tropical plants, paved walkways and a children\'s play area gives families a relaxed place to rest and play between visits to the viewpoints. The park combines nature, adventure and leisure in one peaceful setting.','2026-10-12 15:11:30','2026-10-12 15:11:30','adventure',NULL,NULL,NULL,'Glass skywalk, Hilltop park layout and landscaping, Dome attraction, Children\'s play area, Visitor facilities','Format: Hilltop natural park | Attractions: Glass skywalk, viewpoints and children\'s play area | Setting: Green hills and forested valleys | Audience: Families, nature lovers and tourists','7','1','["assets\\/img\\/projects\\/misty-land-glass-skywalk.jpg","assets\\/img\\/projects\\/misty-land-garden-pool.jpg"]');
INSERT INTO `projects` (`id`,`title`,`slug`,`category`,`image`,`short_description`,`description`,`created_at`,`updated_at`,`category_key`,`location`,`year`,`capacity`,`scope`,`specifications`,`sort_order`,`status`,`gallery`) VALUES ('73','HiLITE Boulevard','hilite-boulevard','Upcoming Project','assets/img/projects/hilite-boulevard-promenade.jpg','HiLITE Boulevard is an upcoming waterfront retail and leisure project by the HiLITE Group, located near the CIFT Junction on Willingdon Island, close to Thoppumpady in Kochi, Kerala.','HiLITE Boulevard is an upcoming waterfront retail and leisure project by the HiLITE Group, located near the CIFT Junction on Willingdon Island, close to Thoppumpady in Kochi, Kerala.

The project is planned as a lively destination on the Kochi waterfront, bringing together shopping, dining and leisure experiences in one place for families, friends and visitors to the city. Its location on Willingdon Island, close to Thoppumpady, places it within easy reach of Kochi\'s main commercial and tourist areas.

The HiLITE Group is known for large retail and lifestyle destinations across Kerala, and HiLITE Boulevard continues that approach with a waterfront setting. Further details of the project, including attractions and opening plans, will be announced as development progresses.','2026-10-12 15:15:22','2026-10-12 15:15:22','theme','Near CIFT Junction, Willingdon Island, Thoppumpady, Kochi, Kerala',NULL,NULL,'Waterfront retail and leisure destination, Family entertainment planning, Visitor experience design','Project stage: Upcoming | Developer: HiLITE Group | Location: Near CIFT Junction, Willingdon Island, Kochi | Format: Waterfront retail and leisure destination','8','1','["assets\\/img\\/projects\\/hilite-boulevard-panorama.jpg","assets\\/img\\/projects\\/hilite-boulevard-aerial.jpg"]');
INSERT INTO `projects` (`id`,`title`,`slug`,`category`,`image`,`short_description`,`description`,`created_at`,`updated_at`,`category_key`,`location`,`year`,`capacity`,`scope`,`specifications`,`sort_order`,`status`,`gallery`) VALUES ('74','DTPC Ernakulam, Marine Drive','dtpc-ernakulam-marine-drive','Tourism & Waterfront Projects','assets/img/projects/dtpc-ernakulam-logo.jpg','The District Tourism Promotion Council (DTPC) Ernakulam manages boat cruise terminals, visitor centres and backwater tourism activities at Marine Drive, Kochi.','The District Tourism Promotion Council (DTPC) Ernakulam manages boat cruise terminals, visitor centres and backwater tourism activities at Marine Drive, Kochi, one of the city\'s best-loved waterfront destinations.

The DTPC Boat Cruise Terminal is located near the Kettuvallom Bridge on the northern side of Marine Drive. It serves as a hub for backwater cruises and local ferry services, giving visitors an easy way to see Kochi from the water.

The DTPC Visitor Facilitation Centre provides tourist information, guidance and assistance to travellers visiting Kochi, helping them plan their days and find the best experiences in and around the city.

Marine Drive is also a venue for regional water events and boat races, including the Indira Gandhi Ever Rolling Trophy and the Champions Boat League (CBL), which bring crowds to the waterfront each season.','2026-10-12 15:19:02','2026-10-12 15:19:02','theme','Marine Drive, Kochi, Kerala',NULL,NULL,'Waterfront tourism, Boat cruise terminal, Visitor facilitation centre, Water sports and boat race events','Client: DTPC Ernakulam | Location: Marine Drive, Kochi, Kerala | Facilities: Boat cruise terminal and visitor facilitation centre | Events: Boat races and water sports','9','1','["assets\\/img\\/projects\\/dtpc-cochin-logo.jpg"]');
INSERT INTO `projects` (`id`,`title`,`slug`,`category`,`image`,`short_description`,`description`,`created_at`,`updated_at`,`category_key`,`location`,`year`,`capacity`,`scope`,`specifications`,`sort_order`,`status`,`gallery`) VALUES ('75','Seaview Park','seaview-park','Theme & Amusement Parks','assets/img/projects/seaview-park-lake-walkway.jpg','Seaview Park is an amusement and recreational park in Alappuzha, Kerala, offering boating facilities and a swimming pool.','Seaview Park is an amusement park in Alappuzha, Kerala, created as a relaxed recreational destination for families, friends and visitors exploring the backwaters.

Boating is a highlight of the park. Visitors can take short rides on the water in round boats and pedal boats, with options for different group sizes, and enjoy the calm canal setting shaded by tall trees.

A swimming pool gives guests a place to cool off, while colourful street-art murals along the canal wall add a cheerful, creative touch to the walkways. Together, the water activities and bright artwork make Seaview Park an easy and enjoyable stop on a trip to Alappuzha.','2026-10-12 15:22:26','2026-10-12 15:27:07','theme','Alappuzha, Kerala',NULL,NULL,'Boating facilities, Swimming pool, Themed murals and landscaping, Visitor walkways and amenities','Location: Alappuzha, Kerala | Format: Recreational amusement park | Attractions: Round boats, pedal boats and swimming pool | Audience: Families, friends and tourists','10','1','["assets\\/img\\/projects\\/seaview-park-houseboat.jpg","assets\\/img\\/projects\\/seaview-park-canal-wall.webp"]');

SET FOREIGN_KEY_CHECKS=1;
