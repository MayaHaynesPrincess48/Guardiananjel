<?php
error_reporting(E_ALL);

$config = array();

$config['phone'] = '(1) 2345-6789';
$config['company_email'] = 'care@guardianangel.com';
$config['site_url'] = 'guardianangel.com';
$config['company_name'] = 'Guardian Angel';
$config['company_address'] = 'Address1, Address2';
$config['company_state'] = 'State';

$config['return_address'] = "Guardian Angel";

$config['product_name'] = 'Guardian Angel';
$config['card_statement'] = 'Guardian Angel';
$config['cs_hours'] = '24hrs/7';

$config['max_qty'] = 10;
$config['cart_page'] = "cart.php";
$currency = '$';

$colors = ['#fa1d81', '#3498DB', '#01e8eb', '#9c27b0', '#e91e63', '#2c3e50'];

$carouselItems = [
	[
		'image' => 'images/carousel/11.jpg',
	],
	[
		'image' => 'images/carousel/2.jpg',
	],
	[
		'image' => 'images/carousel/3.jpg',
	],
	[
		'image' => 'images/carousel/4.jpg',
	],
];

$services = [
	[
		'img' => 'images/services/1.jpg',
		'title' => 'COMMERCIAL AIRLINE REPATRIATION',
	],
	[
		'img' => 'images/services/2.jpg',
		'title' => 'OUR AIRPLANES',
	],
	[
		'img' => 'images/services/3.jpg',
		'title' => 'OUR HELICOPTERS',
	],
	[
		'img' => 'images/services/4.jpg',
		'title' => 'HELICOPTER AIR AMBULANCE',
	],
	[
		'img' => 'images/services/5.jpg',
		'title' => 'GROUND AMBULANCE SERVICE',
	],
	[
		'img' => 'images/services/6.jpg',
		'title' => 'EXECUTIVE AIR AMBULANCE',
	],
	[
		'img' => 'images/services/7.jpg',
		'title' => 'PEDIATRIC INCUBATOR TRANSPORTS',
	],
	[
		'img' => 'images/services/8.jpg',
		'title' => 'ORGAN TRANSPORT',
	],
	[
		'img' => 'images/services/9.jpg',
		'title' => 'COFFINS AND FUNERAL TRANSPORTS',
	],
];

$config['productSpecs'] = array(

	//Product 1

	1 => array(
		'id' => 210,
		'nm' => "Portable Transport Stretcher",
		'prc' => 35.99,
		'shpprc' => 0.00,
		'product-type' => '',
		'altnm' => "",
		'img' => "images/items/1.jpg",
		'img4' => "images/items/1-img.jpg",
		'desc' => "Portable Transport Stretcher with 12 Handles Carrying Bag Patient Animal Mover Travel Size Emergency Casualty Evacuation-Capacity 400lbs（Orange）",
		'points' => "",
		'term' => "By placing an order with us you will be charged {$currency} __prc__ + $0.00 for S&amp;H for One Time for  __prdname__. If you are not completely satisfied with your purchase   __prdname__ at any time, please call {$config['phone']} or email {$config['company_email']}, {$config['cs_hours']}. You will receive your package within 2-5 business days of payment via USPS First Class Mail. I agree that my credit card charge will appear as {$config['card_statement']}.",
		'details' => [
			'Perfect Size for Any Transport: Unfolded, this stretcher measures 71" in length and 28" in width, with a maximum capacity of 400 pounds. The product manual belt adjustment function varies by stretcher model.',
			'Easy to Carry Anywhere: This stretcher can be folded down to a smaller size and comes with a carrying pouch. The bag measures 19.88 inches in length and 11.02 inches in width, making it easy to carry anywhere, anytime.',
			'Versatile Use: This stretcher can be used as a soft stretcher for daily use, as an aid for backboard lifting, and for MCI emergency patient transport.',
			'High-Quality Materials: This stretcher is made with 12black rubber handles and 2 sturdy straps with buckles, all backed by lightweight, waterproof non-woven material.',
			'Provides Better Safety and Protection: This stretcher is not only great for use in hospitals and gymnasiums to transport patients or animals but also perfect for outdoor activities like camping and hiking, bringing you better safety and protection.',
		],
		'size' => "11.85 x 11.77 x 3.27 inches; 3.64 Pounds",
		'category' => 'Cosmetic',
		'color' => 'Orange'
	),

	//Product 2	

	2 => array(
		'id' => 211,
		'nm' => "Yakitoko Wheelchair Stretcher",
		'prc' => 17.76,
		'shpprc' => 0.00,
		'product-type' => '',
		'altnm' => "",
		'img' => "images/items/2.jpg",
		'img4' => "images/items/2-img.jpg",
		'desc' => "Yakitoko Wheelchair Stretcher Ambulance Airplane Strap Seat Belt Quick Release Adjustable with Metal Buckle 47.3 in",
		'points' => "",
		'term' => "By placing an order with us you will be charged {$currency} __prc__ + $0.00 for S&amp;H for One Time for  __prdname__. If you are not completely satisfied with your purchase   __prdname__ at any time, please call {$config['phone']} or email {$config['company_email']}, {$config['cs_hours']}. You will receive your package within 2-5 business days of payment via USPS First Class Mail. I agree that my credit card charge will appear as {$config['card_statement']}.",
		'details' => [
			'It is made of high-quality and durable fabrics. Ergonomic design. Rugged and comfortable, providing safety and durability.',
			'The length is adjustable and easy to adjust. Adjust the appropriate size to ensure patient safety.',
			'The wheelchair safety belt is equipped with metal buckle, which is easy to loosen to ensure the safety of patients.',
			'The wheelchair fixed safety belt does not need tools and can be simply tied to the seat back. Suitable for any inconvenient screw fixing equipment',
			'If you do not like it for any reason, you can contact us by email. We will give you a satisfactory reply within 24 hours. Your satisfaction is our ultimate goal',
		],
		'size' => "9.84 x 2.95 x 2.2 inches; 9.98 ounces",
		'category' => 'Cosmetic',
		'color' => 'Black'
	),

	//Product 3

	3 => array(
		'id' => 212,
		'nm' => "Emergency Siren PA System",
		'prc' => 79.99,
		'shpprc' => 0.00,
		'product-type' => '',
		'altnm' => "",
		'img' => "images/items/3.jpg",
		'img4' => "images/items/3-img.jpg",
		'desc' => "200W 12V 37 Tone Emergency Siren PA System, Slim Speaker Horn with Handheld Remote Control and Microphone for Emergency Vehicles Police Car Firefighter Ambulance SUVs",
		'points' => "",
		'term' => "By placing an order with us you will be charged {$currency} __prc__ + $0.00 for S&amp;H for One Time for  __prdname__. If you are not completely satisfied with your purchase   __prdname__ at any time, please call {$config['phone']} or email {$config['company_email']}, {$config['cs_hours']}. You will receive your package within 2-5 business days of payment via USPS First Class Mail. I agree that my credit card charge will appear as {$config['card_statement']}.",
		'details' => [
			'SIMPLE OPERATION: PTT function (Push To Talk). All-in-one handheld remote control and microphone, easier to operate with one hand while driving.',
			'POWERFUL PERFORMANCE: Speaker produces 125-135 dB 400-4000Hz. (5.7"x2.1"x5.7" LxWxH) Fits in most vehicles.',
			'APPLICABILITY: Suitable for all kinds of alarms and emergencies for police cars, ambulances, fire trucks, construction vehicles, pickup trucks, ect.',
			'HIGH-QUALITY: Comes with mounting bracket. Heavy duty black material with IP66 waterproof rating for longer life.',
			'EXTRA CONVENIENCE: Two additional 10 amp power switches (A/B) to power traffic emergency warning lights or other applicable equipment.',
		],
		'category' => 'Cosmetic',
		'color' => 'Black'
	),

	//Product 4

	4 => array(
		'id' => 213,
		'nm' => "Torchbeam 3157 LED",
		'prc' => 15.49,
		'shpprc' => 0.00,
		'product-type' => '',
		'altnm' => "",
		'img' => "images/items/4.jpg",
		'img4' => "images/items/4-img.jpg",
		'desc' => "Torchbeam 3157 LED Light Bulbs 3600 Lumens with Projector Error-free For Reverse Back Up Lights DRL Brake Lights Fit 3156 3057 3056 4157 6500K Xenon White",
		'points' => "",
		'term' => "By placing an order with us you will be charged {$currency} __prc__ + $0.00 for S&amp;H for One Time for  __prdname__. If you are not completely satisfied with your purchase   __prdname__ at any time, please call {$config['phone']} or email {$config['company_email']}, {$config['cs_hours']}. You will receive your package within 2-5 business days of payment via USPS First Class Mail. I agree that my credit card charge will appear as {$config['card_statement']}.",
		'details' => [
			'Wide Application: 3157 LED bulb compatible for reverse/backup lights, brake lights, tail lights, turn signal lights, parking lights, side marker lights,daytime running light bulbs etc, replace for 3157, 3156, 3057, 4157, 3457, 4057, 3056, 4156, 3047, 3157A, 3357',
			'Maximize Lighting: LED reverse lights with 7SMD 3030 LED chips per bulb, brightness up to 1800 LM per bulb, with projector lens and unique 360-degree lighting design to maximize lighting output',
			'Great Performance: the high precision constant current of 3157 brake light bulb, built-in intelligent IC driver, no UV light emission, no flickering, no IR radiation',
			'Dual Heat Dissipation: aircraft-grade aluminum heat sink with low temperature, rust resistance, bump resistance, no bulb out error, no flickering, strong light intensity, and energy saving',
			'Easy Installation: a plug-and-play installation that fits right into original light housings, thin lamp shape, avert the situation of unable to install, convenient to replace',
		],
		'category' => 'Cosmetic',
		'color' => 'Xenon White'

	),

	//Product 5

	5 => array(
		'id' => 214,
		'nm' => "Red First Responder Bag",
		'prc' => 25.99,
		'shpprc' => 0.00,
		'product-type' => '',
		'altnm' => "",
		'img' => "images/items/5.jpg",
		'img4' => "images/items/5-img.jpg",
		'desc' => "Red First Responder Bag, EMT Trauma First Aid Carrier for Paramedics and Emergency Medical Supplies Kit, Lightweight and Durable",
		'points' => "",
		'term' => "By placing an order with us you will be charged {$currency} __prc__ + $0.00 for S&amp;H for One Time for  __prdname__. If you are not completely satisfied with your purchase   __prdname__ at any time, please call {$config['phone']} or email {$config['company_email']}, {$config['cs_hours']}. You will receive your package within 2-5 business days of payment via USPS First Class Mail. I agree that my credit card charge will appear as {$config['card_statement']}.",
		'details' => [
			'COMPACT AND SPACIOUS - Novamedic Medical assistance bag is perfectly sized to hold an array of medical supply and equipment, while simultaneously small enough to easily store and carry. Bag dimensions: 17"(L) x 9"(W) x 7"(H).',
			'MAIN COMPARTMENT - Consists of three removable center compartments divided with adjustable padded dividers, one inner front pocket and two zipper outer side pockets for keeping tools in-need easily accessible and extra storage.',
			'SUPERIOR QUALITY - Made of durable water-resistant nylon, heavy duty zippers, two push-fit front buckles, sturdy handle, and a convenient sling strap for easy carry. This high-quality medical bag is made to last long.',
			'FUNCTIONAL DESIGN - High visibility reflective strips run along the red color medical bag and its outer pockets for easy recognition in the dark. It has a water-resistant bottom designed to keep your equipment dry under wet conditions.',
			'MULTI USE - Novamedic emergency trauma bag is ideal for EMTs, paramedics, first responders, hiking, camping, travel, sport activities, and for keeping at home, schools, office or in the car as a backup for emergency situations.',
		],
		'category' => 'Cosmetic',
		'color' => 'Red'
	),

	//Product 6

	6 => array(
		'id' => 215,
		'nm' => "EMS Stair Chair Aluminum",
		'prc' => 219.47,
		'shpprc' => 0.00,
		'product-type' => '',
		'altnm' => "",
		'img' => "images/items/6.jpg",
		'img4' => "images/items/6-img.jpg",
		'desc' => "EMS Stair Chair Aluminum Light Weight Ambulance Medical Lift",
		'points' => "",
		'term' => "By placing an order with us you will be charged {$currency} __prc__ + $0.00 for S&amp;H for One Time for  __prdname__. If you are not completely satisfied with your purchase   __prdname__ at any time, please call {$config['phone']} or email {$config['company_email']}, {$config['cs_hours']}. You will receive your package within 2-5 business days of payment via USPS First Class Mail. I agree that my credit card charge will appear as {$config['card_statement']}.",
		'details' => [
			'DURABLE AND DEPENDABLE - Constructed with high strength aluminum alloy for durability and easy handling. It is also light-weight and sturdy so it will not lose shape after repeated use. The large 5” rear wheels allows for easy transport over most surfaces. Folds flat making it simple to store and transport.',
			'NON-SLIP HANDLES – The rear and front handles are molded with grooves to ensure a secure grip. The handles are designed and molded for comfort and balance during use. The telescoping, 2 position front handles adjust for maximum stability and safety, making this chair a go-to for any situation',
			'3 ADJUSTABLE STRAPS – Each 7’ strap includes a quick release restraint to ensure the patient is safely held in place and comfortable during transport. They are made of a woven, durable nylon for strength and to resist wear from use.',
			'EASY TO MAINTAIN AND CLEAN – The orange seat cover is made of vinyl-coated nylon and is simple to clean, resists stains, blood and bodily fluids. The large metal zippers allows for strong support while allowing for easy removal for cleaning and maintenance.',
		],
		'category' => 'Cosmetic',
		'color' => 'Orange'
	),

	//Product 7

	7 => array(
		'id' => 216,
		'nm' => "Professional Ambulance Stretcher",
		'prc' => 1634,
		'shpprc' => 0.00,
		'product-type' => '',
		'altnm' => "",
		'img' => "images/items/7.jpg",
		'img4' => "images/items/7-img.jpg",
		'desc' => "MS3C-200S, Professional Ambulance Stretcher, Weight Capacity 350lbs.",
		'points' => "",
		'term' => "By placing an order with us you will be charged {$currency} __prc__ + $0.00 for S&amp;H for One Time for  __prdname__. If you are not completely satisfied with your purchase   __prdname__ at any time, please call {$config['phone']} or email {$config['company_email']}, {$config['cs_hours']}. You will receive your package within 2-5 business days of payment via USPS First Class Mail. I agree that my credit card charge will appear as {$config['card_statement']}.",
		'details' => [
			'Mechanical folding legs are controlled by the handles on both sides',
			'Floor-mounted safety hook locks stretcher while in motion (included)',
			'Light-weight, easy sterilization. Waterproof, 4in Thick foamed cushion. Pillow not included.',
			'The back support can be adjusted 0-60 degrees with a spring loaded action lever. This stretcher comes standard with fluid retardant, easy to clean, ergonomically designed mattress for maximum patient comfort.',
			'Upright dimensions: 78in x 24in x 49in, Collapsed dimensions: 78in x 24in x 19in, Max loading height: 27in',
		],
		'category' => 'Gadgets',
		'color' => 'wooden'
	),

	//Product 8

	8 => array(
		'id' => 217,
		'nm' => "Stretcher Portable Folding",
		'prc' => 199.99,
		'shpprc' => 0.00,
		'product-type' => '',
		'altnm' => "",
		'img' => "images/items/8.jpg",
		'img4' => "images/items/8-img.jpg",
		'desc' => "Stretcher Portable Folding Aluminum Lightweight with Trolley 4 Wheels Rescue Stretcher for Hospital, Clinic, Home, Sports Venues, Ambulance Capacity 350 lb",
		'points' => "",
		'term' => "By placing an order with us you will be charged {$currency} __prc__ + $0.00 for S&amp;H for One Time for  __prdname__. If you are not completely satisfied with your purchase   __prdname__ at any time, please call {$config['phone']} or email {$config['company_email']}, {$config['cs_hours']}. You will receive your package within 2-5 business days of payment via USPS First Class Mail. I agree that my credit card charge will appear as {$config['card_statement']}.",
		'details' => [
			'【High-quality material】Made of high-strength aluminum alloy and oxford fabric, the weight of the stretcher is only 18lb, waterproof and durable, easy to clean, with a maximum load capacity of 350lb, which is ideal for hospitals and emergency centers to rescue patients.',
			'【Safety belt design】The stretcher is equipped with two high-quality safety belts on the chest and legs, which can fix the patient and ensure the stability of the stretcher lift, providing more safety for the patient!',
			'【Multi-functional design】With an aluminum tie bar, two-directional wheels, and two universal wheels with brakes, it can be pulled, saving effort and allowing for more rescue work!',
			'【Easy to use】The stretcher can be folded for storage and can be opened quickly and easily, use size: 72.8*19.6*7.9in, fold size: 36.2*19.6*3.6in, can easily fit into the trunk of a car, easy to carry and store, can be placed in a safe place! It can be used easily in any situation!',
			'【Scope of application】Stretcher for patient transport, nursing bed transfer, mobility equipment for daily life and home care, suitable for the elderly, bariatric patients, disabled and ​handicapped people, et',
		],
		'category' => 'Gadgets',
		'color' => 'Blue'
	),

	//Product 9

	9 => array(
		'id' => 218,
		'nm' => "MERCEDES-BENZ SPRINTER 2500",
		'prc' => 45000,
		'shpprc' => 0.00,
		'product-type' => '',
		'altnm' => "",
		'img' => "images/items/9.jpg",
		'img4' => "images/items/9-img.jpg",
		'desc' => "2017 MERCEDES 2500 AMBULANCE LOCATED IN FONTANA CA - TRUCK HAS 277,951 MILES- ASKING $45,000 OR BEST OFFER- SOLD ",
		'points' => "",
		'term' => "By placing an order with us you will be charged {$currency} __prc__ + $0.00 for S&amp;H for One Time for  __prdname__. If you are not completely satisfied with your purchase   __prdname__ at any time, please call {$config['phone']} or email {$config['company_email']}, {$config['cs_hours']}. You will receive your package within 2-5 business days of payment via USPS First Class Mail. I agree that my credit card charge will appear as {$config['card_statement']}.",
		'details' => "",
		'category' => 'Cosmetic',
		'color' => 'White'
	),


	//Product 10

	10 => array(
		'id' => 219,
		'nm' => "CHEVROLET EXPRESS 3500",
		'prc' => 39995,
		'shpprc' => 0.00,
		'product-type' => '',
		'altnm' => "",
		'img' => "images/items/10.jpg",
		'img4' => "images/items/10-img.jpg",
		'desc' => "2013 Chevrolet Express Type III Ambulance, Duramax 6.6L Diesel Engine, Auto Transmission, Only 24,453 Miles, A/C (Cab and Patient Module), 12,300 GVW, Wheeled Coach Type III Ambulance Body, Walk-Thru, Cool-Bar A/C System, Vanner Inverter, Amico Medical Oxygen System, Attendant Seat, Full Depth Interior Cabinets w/Sliding Plexiglass Windows and Adjustable Shelves, Medical Equipment Storage, Scene Lights, Under Ride Bumper, Emergency Warning Lighting System, Very Clean and Well Maintained Ex-Gov't Unit",
		'points' => "",
		'term' => "By placing an order with us you will be charged {$currency} __prc__ + $0.00 for S&amp;H for One Time for  __prdname__. If you are not completely satisfied with your purchase   __prdname__ at any time, please call {$config['phone']} or email {$config['company_email']}, {$config['cs_hours']}. You will receive your package within 2-5 business days of payment via USPS First Class Mail. I agree that my credit card charge will appear as {$config['card_statement']}.",
		'details' => "",
		'category' => 'Gadgets',
		'color' => 'Shiny Blue'
	),

	//Product 11

	11 => array(
		'id' => 220,
		'nm' => "Airbus EC145",
		'prc' => 1500000,
		'shpprc' => 0.00,
		'product-type' => '',
		'altnm' => "",
		'img' => "images/items/11.jpg",
		'img4' => "images/items/11-img.jpg",
		'desc' => "EMS EC145/BK117C2; Fully NVG Compatible -Certified for NVIS; Color Weather Radar RDR 2000; CVFDR Honeywell; Vapor Cycle Air Conditioner (STC); SpectrolabSX-5 StarbustSearchlight (STC); EMS Aerolite Kit (STC); We offer the Aircraft : “As is” Ex-Works Europe with a Valid Export C of A.",
		'points' => "",
		'term' => "By placing an order with us you will be charged {$currency} __prc__ + $0.00 for S&amp;H for One Time for  __prdname__. If you are not completely satisfied with your purchase   __prdname__ at any time, please call {$config['phone']} or email {$config['company_email']}, {$config['cs_hours']}. You will receive your package within 2-5 business days of payment via USPS First Class Mail. I agree that my credit card charge will appear as {$config['card_statement']}.",
		'details' => "",
		'category' => 'Gadgets',
		'color' => 'Red'
	),

	//Product 12

	12 => array(
		'id' => 221,
		'nm' => "Sikorsky S76C++",
		'prc' => 1000000,
		'shpprc' => 0.00,
		'product-type' => '',
		'altnm' => "",
		'img' => "images/items/12.jpg",
		'img4' => "images/items/12-img.jpg",
		'desc' => "EMS configured helicopter",
		'points' => "",
		'term' => "By placing an order with us you will be charged {$currency} __prc__ + $0.00 for S&amp;H for One Time for  __prdname__. If you are not completely satisfied with your purchase   __prdname__ at any time, please call {$config['phone']} or email {$config['company_email']}, {$config['cs_hours']}. You will receive your package within 2-5 business days of payment via USPS First Class Mail. I agree that my credit card charge will appear as {$config['card_statement']}.",
		'details' => "",
		'category' => 'Gadgets',
		'color' => 'Muilti Color'
	),

);

$config['shippingRates'] = array(
	'US' => array(
		's' => 70,
		'h' => 0.00,
		'r' => 0
	)
);

$config['countries'] = array(
	'US' => 'United States',
	'AF' => 'Afghanistan',
	'AL' => 'Albania',
	'DZ' => 'Algeria',
	'AS' => 'American Samoa',
	'AD' => 'Andorra',
	'AO' => 'Angola',
	'AI' => 'Anguilla',
	'AQ' => 'Antarctica',
	'AG' => 'Antigua And Barbuda',
	'AR' => 'Argentina',
	'AM' => 'Armenia',
	'AW' => 'Aruba',
	'AU' => 'Australia',
	'AT' => 'Austria',
	'AZ' => 'Azerbaijan',
	'BS' => 'Bahamas',
	'BH' => 'Bahrain',
	'BD' => 'Bangladesh',
	'BB' => 'Barbados',
	'BY' => 'Belarus',
	'BE' => 'Belgium',
	'BZ' => 'Belize',
	'BJ' => 'Benin',
	'BM' => 'Bermuda',
	'BT' => 'Bhutan',
	'BO' => 'Bolivia',
	'BA' => 'Bosnia And Herzegowina',
	'BW' => 'Botswana',
	'BV' => 'Bouvet Island',
	'BR' => 'Brazil',
	'IO' => 'British Indian Ocean Territory',
	'BN' => 'Brunei Darussalam',
	'BG' => 'Bulgaria',
	'BF' => 'Burkina Faso',
	'BI' => 'Burundi',
	'KH' => 'Cambodia',
	'CM' => 'Cameroon',
	'CV' => 'Cape Verde',
	'KY' => 'Cayman Islands',
	'CF' => 'Central African Republic',
	'TD' => 'Chad',
	'CL' => 'Chile',
	'CN' => 'China',
	'CX' => 'Christmas Island',
	'CC' => 'Cocos (Keeling) Islands',
	'CO' => 'Colombia',
	'KM' => 'Comoros',
	'CG' => 'Congo',
	'CD' => 'Congo, The Democratic Republic Of The',
	'CK' => 'Cook Islands',
	'CR' => 'Costa Rica',
	'CI' => 'Cote D\'Ivoire',
	'HR' => 'Croatia (Local Name: Hrvatska)',
	'CU' => 'Cuba',
	'CY' => 'Cyprus',
	'CZ' => 'Czech Republic',
	'DK' => 'Denmark',
	'DJ' => 'Djibouti',
	'DM' => 'Dominica',
	'DO' => 'Dominican Republic',
	'TP' => 'East Timor',
	'EC' => 'Ecuador',
	'EG' => 'Egypt',
	'SV' => 'El Salvador',
	'GQ' => 'Equatorial Guinea',
	'ER' => 'Eritrea',
	'EE' => 'Estonia',
	'ET' => 'Ethiopia',
	'FK' => 'Falkland Islands (Malvinas)',
	'FO' => 'Faroe Islands',
	'FJ' => 'Fiji',
	'FI' => 'Finland',
	'FR' => 'France',
	'FX' => 'France, Metropolitan',
	'GF' => 'French Guiana',
	'PF' => 'French Polynesia',
	'TF' => 'French Southern Territories',
	'GA' => 'Gabon',
	'GM' => 'Gambia',
	'GE' => 'Georgia',
	'DE' => 'Germany',
	'GH' => 'Ghana',
	'GI' => 'Gibraltar',
	'GR' => 'Greece',
	'GL' => 'Greenland',
	'GD' => 'Grenada',
	'GP' => 'Guadeloupe',
	'GU' => 'Guam',
	'GT' => 'Guatemala',
	'GN' => 'Guinea',
	'GW' => 'Guinea-Bissau',
	'GY' => 'Guyana',
	'HT' => 'Haiti',
	'HM' => 'Heard And Mc Donald Islands',
	'HN' => 'Honduras',
	'HK' => 'Hong Kong',
	'HU' => 'Hungary',
	'IS' => 'Iceland',
	'IN' => 'India',
	'IR' => 'Iran (Islamic Republic Of)',
	'IQ' => 'Iraq',
	'IE' => 'Ireland',
	'IL' => 'Israel',
	'IT' => 'Italy',
	'JM' => 'Jamaica',
	'JP' => 'Japan',
	'JO' => 'Jordan',
	'KZ' => 'Kazakhstan',
	'KE' => 'Kenya',
	'KI' => 'Kiribati',
	'KP' => 'Korea, Democratic People\'S Republic Of',
	'KR' => 'Korea, Republic Of',
	'KW' => 'Kuwait',
	'KG' => 'Kyrgyzstan',
	'LA' => 'Lao People\'S Democratic Republic',
	'LV' => 'Latvia',
	'LB' => 'Lebanon',
	'LS' => 'Lesotho',
	'LR' => 'Liberia',
	'LY' => 'Libyan Arab Jamahiriya',
	'LI' => 'Liechtenstein',
	'LT' => 'Lithuania',
	'LU' => 'Luxembourg',
	'MO' => 'Macau',
	'MK' => 'Macedonia, Former Yugoslav Republic Of',
	'MG' => 'Madagascar',
	'MW' => 'Malawi',
	'MY' => 'Malaysia',
	'MV' => 'Maldives',
	'ML' => 'Mali',
	'MT' => 'Malta',
	'MH' => 'Marshall Islands, Republic of the',
	'MQ' => 'Martinique',
	'MR' => 'Mauritania',
	'MU' => 'Mauritius',
	'YT' => 'Mayotte',
	'MX' => 'Mexico',
	'FM' => 'Micronesia, Federated States Of',
	'MD' => 'Moldova, Republic Of',
	'MC' => 'Monaco',
	'MN' => 'Mongolia',
	'MS' => 'Montserrat',
	'MA' => 'Morocco',
	'MZ' => 'Mozambique',
	'MM' => 'Myanmar',
	'NA' => 'Namibia',
	'NR' => 'Nauru',
	'NP' => 'Nepal',
	'NL' => 'Netherlands',
	'AN' => 'Netherlands Antilles',
	'NC' => 'New Caledonia',
	'NZ' => 'New Zealand',
	'NI' => 'Nicaragua',
	'NE' => 'Niger',
	'NG' => 'Nigeria',
	'NU' => 'Niue',
	'NF' => 'Norfolk Island',
	'ND' => 'Northern Ireland',
	'MP' => 'Northern Mariana Islands, Commonwealth of the',
	'NO' => 'Norway',
	'OM' => 'Oman',
	'PK' => 'Pakistan',
	'PW' => 'Palau, Republic of',
	'PA' => 'Panama',
	'PG' => 'Papua New Guinea',
	'PY' => 'Paraguay',
	'PE' => 'Peru',
	'PH' => 'Philippines',
	'PN' => 'Pitcairn',
	'PL' => 'Poland',
	'PT' => 'Portugal',
	'PR' => 'Puerto Rico',
	'QA' => 'Qatar',
	'RE' => 'Reunion',
	'RO' => 'Romania',
	'RU' => 'Russian Federation',
	'RW' => 'Rwanda',
	'KN' => 'Saint Kitts And Nevis',
	'LC' => 'Saint Lucia',
	'VC' => 'Saint Vincent And The Grenadines',
	'WS' => 'Samoa',
	'SM' => 'San Marino',
	'ST' => 'Sao Tome And Principe',
	'SS' => 'Scotland',
	'SN' => 'Senegal',
	'SC' => 'Seychelles',
	'SL' => 'Sierra Leone',
	'SG' => 'Singapore',
	'SK' => 'Slovakia (Slovak Republic)',
	'SI' => 'Slovenia',
	'SB' => 'Solomon Islands',
	'SO' => 'Somalia',
	'ZA' => 'South Africa',
	'GS' => 'South Georgia, South Sandwich Islands',
	'ES' => 'Spain',
	'LK' => 'Sri Lanka',
	'SH' => 'St. Helena',
	'PM' => 'St. Pierre And Miquelon',
	'SD' => 'Sudan',
	'SR' => 'Suriname',
	'SJ' => 'Svalbard And Jan Mayen Islands',
	'SZ' => 'Swaziland',
	'SE' => 'Sweden',
	'CH' => 'Switzerland',
	'SY' => 'Syrian Arab Republic',
	'TW' => 'Taiwan',
	'TJ' => 'Tajikistan',
	'TZ' => 'Tanzania, United Republic Of',
	'TH' => 'Thailand',
	'TG' => 'Togo',
	'TK' => 'Tokelau',
	'TO' => 'Tonga',
	'TT' => 'Trinidad And Tobago',
	'TN' => 'Tunisia',
	'TR' => 'Turkey',
	'TM' => 'Turkmenistan',
	'TC' => 'Turks And Caicos Islands',
	'TV' => 'Tuvalu',
	'UG' => 'Uganda',
	'UA' => 'Ukraine',
	'AE' => 'United Arab Emirates',
	'GB' => 'United Kingdom',
	'UM' => 'United States Minor Outlying Islands',
	'UY' => 'Uruguay',
	'UZ' => 'Uzbekistan',
	'VU' => 'Vanuatu',
	'VA' => 'Vatican City, State of the',
	'VE' => 'Venezuela',
	'VN' => 'Viet Nam',
	'VG' => 'Virgin Islands (British)',
	'VI' => 'Virgin Islands (U.S.)',
	'WL' => 'Wales',
	'WF' => 'Wallis And Futuna Islands',
	'EH' => 'Western Sahara',
	'YE' => 'Yemen',
	'YU' => 'Yugoslavia',
	'ZM' => 'Zambia',
	'ZW' => 'Zimbabwe'
);

$inputInfo = [
	[
		'name' => 'firstName',
		'placeHolder' => 'First Name',
		'type' => 'text',
		'length' => '64',
	],
	[
		'name' => 'lastName',
		'placeHolder' => 'Last Name',
		'type' => 'text',
		'length' => '64',
	],
	[
		'name' => 'email',
		'placeHolder' => 'E-mail',
		'type' => 'email',
		'length' => '',
	],
	[
		'name' => '',
		'placeHolder' => '',
		'type' => 'text',
		'length' => '',
	],
	[
		'name' => '',
		'placeHolder' => '',
		'type' => 'text',
		'length' => '',
	],
];
