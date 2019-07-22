<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('team')->insert([
            "name" => 'Dato’ Arai Ezzra',
            "title" => 'Founder',
            "image" => '/1.jpg',
            "link" => 'https://www.linkedin.com/in/araiezzra/',
            "category" => 'executive',
            "team_order" => "1",
            "description" => "Dato’ Muhd Azrainuddin also known as Arai Ezzra, is the founder of Blockchains.My
and Dinarcoin, two brands which bring global innovation for gold storage and utilisation
through fintech and blockchain technology. He has been involved in the
industry for over 10 years in technology, sales, marketing, and advisory roles, focusing
predominantly on forex and ecommerce products. With intense passion in
fintech and cryptocurrency, Dato’ Arai has set his own company to start the development
of his own idea and innovation.",


        ]);


        DB::table('team')->insert([
            "name" => 'Datin Ezdiani',
            "title" => 'Co-Founder',
            "image" => '/2.jpg',
            "link" => 'https://www.linkedin.com/in/yanie-ezzra/',
            "category" => 'executive',
            "team_order" => "2",
            "description" => "Nur Ezdiani binti Baharoddin is the Co-Founder of Blockchains.My and Dinarcoin,
two brands which bring global innovation for gold storage and utilisation through
fintech and blockchain technology. She has a vast experience in multimedia and
publication while at the same time has an intense passion in technology and gold
investment. She combines her knowledge and passion to establish the brands to
dive deeper into the world of gold and technology and spread the beauty of it to
others.",
        ]);

        DB::table('team')->insert([
            "name" => 'Nurshuhada Zainal',
            "title" => 'Project CEO',
            "image" => '/3.png',
            "link" => 'http://www.linkedin.com/in/nurshuhada-zainal',
            "category" => 'executive',
            "team_order" => "3",
            "description" => "Attained Diploma in Business Studies (UiTM) along with a Degree in Human Sciences
                Majoring in Political Science, International Islamic University Malaysia (IIUM).
                Recently completed Oxford Blockchain Program and professionally certified.
                Recognized with 10 years of solid experience in financial advisory, wealth management
                and a Human Resources practitioner. Committed in exploring entrepreneurship
                and management leadership for more than 5 years.
                For more than 3 years, have dedicated to utilize knowledge, skills and experiences
                in managing Financial Technology companies which enable the business to expand
                globally.",
        ]);


        DB::table('team')->insert([
            "name" => 'Kalam Azad',
            "title" => 'Head of IT',
            "image" => '/4.jpg',
            "link" => 'https://www.linkedin.com/in/kalam-azad-22151129/',
            "category" => 'executive',
            "team_order" => "4",
            "description" => "16++ years of development experience, manage and lead projects for desktop, web
and mobile platforms. Love to learn and still learning.",
        ]);

        DB::table('team')->insert([
            "name" => 'Sary Alvy',
            "title" => 'Blockchain Consultant',
            "image" => '/5.jpg',
            "link" => 'https://www.linkedin.com/in/sary-alvy-4a0298169/',
            "category" => 'executive',
            "team_order" => "5",
            "description" => "Focusing in achieving the highest level of academics in Computer Science, Information
                Technolo.gy and Blockchain Technology. Accredited with Degree in Computer
                Science and Masters in Information Technology. Certified by MasterClass in Blockchain
                Development.
                With a high interest in programming, managed to achieve 10 years of experience as
                a programmer, 5 years as a project manager along with 6 years experience in blockchain
                development.",
        ]);

        DB::table('team')->insert([
            "name" => 'Ragula Suman',
            "title" => 'IT Officer',
            "image" => '/6.png',
            "link" => 'https://www.linkedin.com/in/ragula-suman-980aa628/',
            "category" => 'executive',
            "team_order" => "6",
            "description" => "Experienced PHP Developer with a demonstrated history of working in the information
                technology and services industry. Skilled in PHP, WordPress, Query Optimization,
                Web Design, and HTML. Strong media and communication professional with a
                Bachelor of Engineering (BE) focused in Computer Science from Bachelors (BE) in
                Computer Science Information Technology Engineering from Osmania University.",
        ]);

        DB::table('team')->insert([
            "name" => 'Izyan Liyana Azhar',
            "title" => 'Head of Operation',
            "image" => '/7.jpg',
            "link" => 'https://www.linkedin.com/in/izyan-liyana-azhar-043a70168/',
            "category" => 'executive',
            "team_order" => "7",
            "description" => "Bachelor's Degree with Majoring in Mathematics. Hold the Anti-Money Laundering-
Trade Based certificate and participated in the National Tax Conference 2018.
Play a critical role in the company's productivity, efficiency, profitability and problem
solving. Experts in analysing risks and documenting requirements that are associated
with cryptocurrency and exploring blockchain technology as well as hook up
with vendors, blockchain developers, authorities and regional representatives.",
        ]);

        DB::table('team')->insert([
            "name" => 'Shanafisha',
            "title" => 'Asst Manager Business Operation',
            "image" => '/8.jpg',
            "link" => 'https://www.linkedin.com/in/shanafisha-mohd-hanafiah-60b6b2152/',
            "category" => 'executive',
            "team_order" => "8",
            "description" => "A Computer Science and Mathematics graduate, majoring in Mathematics Management
from Universiti Teknologi Mara (UiTM). Committed in bringing the best
outcome with the team in contributing to company's growth, recognition and
expansion. Fully dedicated in learning and utilize the knowledge of cryptocurrency
and blockchain.",
        ]);

        DB::table('team')->insert([
            "name" => 'Nazatul Atikah',
            "title" => 'Asst Manager Education & Marketing',
            "image" => '/9.jpg',
            "link" => 'https://www.linkedin.com/in/nazatul-atikah-614005169/',
            "category" => 'executive',
            "team_order" => "9",
            "description" => "Pursued Bachelors' Degree in Marketing at Universiti Teknologi MARA, Malaysia.
Utilizing my experiences, skills and knowledge to manage International Crypto
Exchanger. Had the golden opportunity to spread awareness of company's products,
cryptocurrencies and blockchain technology in Japan, Australia and throughout
ASEAN.",
        ]);


        DB::table('team')->insert([
            "name" => 'Hussaini Zaharin',
            "title" => 'Senior Executive ',
            "image" => '/10.png',
            "link" => 'https://www.linkedin.com/in/hussaini-zaharin-6a049b145/',
            "category" => 'executive',
            "team_order" => "10",
            "description" => "Expert in developed business opportunities local & international market. Expert in
all the company products and devise a viable marketing strategy. Monitored and
managed extensive international market to include Dubai, Japan, Hawaii, Cambodia,
Indonesia, Singapore, Brunei, Thailand and Australia. Understand in regulations
of Crypto in many countries. Assist developing crypto products and one of the company’s
official speaker for various company events.",
        ]);


        DB::table('team')->insert([
            "name" => 'Muhd Kovin Abd Kohar ',
            "title" => 'Project Executive',
            "image" => '/11.png',
            "link" => 'https://www.linkedin.com/in/muhd-kovin-abd-kohar-32204b11b/',
            "category" => 'executive',
            "team_order" => "11",
            "description" => "Someone who thinks positively and who can execute on difficult tasks. I'm not an
individual who needs to be micromanaged. Rather, when given a specific task, I can
figure out the best ways to solve the problem in an autonomous manner.",
        ]);


        DB::table('team')->insert([
            "name" => 'Hafiz Nadzri',
            "title" => 'Project Executive',
            "image" => '/12.jpg',
            "link" => 'https://www.linkedin.com/in/hafiznadzri/',
            "category" => 'executive',
            "team_order" => "12",
            "description" => "Committed in ensuring the sustainability, market relativity and high competitive
value of the company. Desired to improve the society's quality of life through Innovation,
Technology Breakthroughs and Internet of Things.",
        ]);


        DB::table('team')->insert([
            "name" => 'Daing Nurul Mahfuzah ',
            "title" => 'Legal & Compliance Officer',
            "image" => '/13.jpg',
            "link" => 'https://www.linkedin.com/in/daing-nurul-mahfuzah-binti-daing-ibrahim-766960b7/',
            "category" => 'executive',
            "team_order" => "13",
            "description" => "A law graduate who is in path of learning and gaining as much as possible experience
in work field especially in cryptocurrency and blockchain, dedicated at works,
proactive, a good learner, able to work under pressure, good team work, punctual
and a good researcher",
        ]);


        DB::table('team')->insert([
            "name" => 'Iz Sofian',
            "title" => 'Risk Dealer Analyst',
            "image" => '/14.jpg',
            "link" => 'https://www.linkedin.com/in/iz-sofian-788003169/',
            "category" => 'executive',
            "team_order" => "14",
            "description" => "Assessing and identifying the potential risks that may hinder the reputation, safety,
security and financial prosperity of the organisation. Highly analytical and large part
of my time will be focused on conducting detailed risk assessments, evaluating the
effects of any proposed risks. Currently dealing with financial risk of cryptocurrency,
studying how the market works and controlling the price.",
        ]);


        DB::table('team')->insert([
            "name" => 'Rosnidaliana Roslan',
            "title" => 'Head of Finance',
            "image" => '/15.jpg',
            "link" => 'https://www.linkedin.com/in/rosnidaliana-roslan-04500a169/',
            "category" => 'executive',
            "team_order" => "15",
            "description" => "Have a previous experience in organisational financial management. Recognized as
a good team player with excellent interpersonal skills, great multitasking abilities
and can be relied in completing the given tasks within the time frames.",
        ]);


        DB::table('team')->insert([
            "name" => 'Nelissa Helen Dellezo-Oliveros',
            "title" => 'Support Manager',
            "image" => '/16.jpg',
            "link" => 'https://www.linkedin.com/in/nhdoliveros/',
            "category" => 'support',
            "team_order" => "1",
            "description" => "Skills in People management, team leading, customer experience/support, conversational
to professional English communication skills, reports analysis, very detailed
when it comes to documents and agreements Professional Experience: 3 years in
Product-Consumer Support
(2008-2010), 6 years in Global IT Support as engineer, data analyst and technical
leader (2010-2016).",
        ]);


        DB::table('team')->insert([
            "name" => 'ARINA NONAKA',
            "title" => 'Customer Service',
            "image" => '/17.png',
            "link" => 'https://www.linkedin.com/in/arinanonaka',
            "category" => 'support',
            "team_order" => "2",
            "description" => "I have been providing customer service over 5 years. I am good at Customer service,
Store administration, graphics design and ecommerce platform: Amazon, Shopify,
woocommerce. I am capable of handling work under pressure.",
        ]);


        DB::table('team')->insert([
            "name" => 'HEITOR PEREIRA',
            "title" => 'Programmer',
            "image" => '/18.png',
            "link" => 'https://www.linkedin.com/in/heitor-pereira-2b5262169/',
            "category" => 'support',
            "team_order" => "3",
            "description" => "I am a programmer with a focus on web, the languages I dominate are Javascript,
ReactJS and also the web as I mentioned (HTML and CSS). I also have good knowledge
on cryptocurrencies and their technologies since I have been studying this
since 2016 and I am also an investor. Now I also believe that I have the necessary
knowledge to serve the users since I have studied all the documents that have sent
us.",
        ]);


        DB::table('team')->insert([
            "name" => 'HANNAH OLA',
            "title" => 'Customer Service',
            "image" => '/19.png',
            "link" => 'http://linkedin.com/in/hannahola',
            "category" => 'support',
            "team_order" => "4",
            "description" => "Hannah Ola has a service-oriented mind with a passion for creative expression, curiosity
for new knowledge, and an IT background. She now has about 5 years of experience
in the Customer Service industry since graduating with a Bachelor’s degree
in Information Technology in 2013. She had provided varied customer support and
personal assistance in all avenues of communications in the past. She also dabbles
in different creative hobbies outside work life.",
        ]);


        DB::table('team')->insert([
            "name" => 'PAUL DELA CRUZ',
            "title" => 'Customer Service',
            "image" => '/20.png',
            "link" => 'https://www.linkedin.com/in/paulo-rico-dela-cruz-77181937',
            "category" => 'support',
            "team_order" => "5",
            "description" => "I have a Bachelors Degree in Computer Science with 12 years work experience in the
customer service and support industry. I am proficient in using MS Office applications
and in Web Design. I am knowledgeable in Adobe Photoshop, HTML, CSS,
Javascript, and PHP.",
        ]);


        DB::table('team')->insert([
            "name" => 'DIANE SALAS',
            "title" => 'IT SUPPORT',
            "image" => '/21.png',
            "link" => 'https://www.linkedin.com/in/diana-salas-78142567/',
            "category" => 'support',
            "team_order" => "6",
            "description" => "I have been working remotely full time for the past 7 years. I am knowledgeable
with MS Office applications, research tools, software and online tools.
A great team player with high motivation to finish the tasks at hand.",
        ]);


        DB::table('team')->insert([
            "name" => 'IVAN SKRYPKA',
            "title" => 'CEO',
            "image" => '/22.JPG',
            "link" => 'https://www.linkedin.com/in/ivan-skrypka-6b35bb43',
            "category" => 'developers',
            "team_order" => "1",
            "description" => "Strategic technology advisor and entrepreneur with an acute sense for business
opportunities. In SK-Consulting Ivan is responsible for driving the overall sales,
business strategy and execution. With more than 10 years' of assiduous immersion
in IT, he is a very experienced and also very creative leader with excellent understanding
of business needs and leadership skills. Always fully transparent with the
clients with regards to development status, risks and issues, providing a holistic
project experience to our customers.",
        ]);

        DB::table('team')->insert([
            "name" => 'DMITRIY MEKHED',
            "title" => 'Team Lead',
            "image" => '/23.JPG',
            "link" => 'https://www.linkedin.com/in/dima-mehed-369a49113',
            "category" => 'developers',
            "team_order" => "2",
            "description" => "With over 9 years of experience in IT. Agile Coach at the Team and organization
levels capable of delivering large-scale software development projects on time and
on budget by effectively coding, collaborating, leading, and coaching agile teams.
Having big interest in Blockchain technology. He is an expert in sourcing innovative
technological solutions and choosing the right technology for the right business
need. He can quickly define IT and infrastructure's road map, needs, tools, work
protocols and find the best approach for implementation in the company's operations.",
        ]);

        DB::table('team')->insert([
            "name" => 'OLEG KNISH',
            "title" => 'SENIOR FULL STACK DEVELOPER',
            "image" => '/24.JPG',
            "link" => 'https://www.linkedin.com/in/oleg-werdffelynir-69b235101',
            "category" => 'developers',
            "team_order" => "3",
            "description" => "Oleg is a Senior PHP/JavaScript Developer with over 10 years of experience in full
project lifecycle, application design and technical architecture, web development,
blockchain development. He has a Bachelors in Software Engineering from Kiev
National Technical University. Oleg has strong references, over 20 successful projects
and he can offer competitive and flexible pricing policy and great quality.",
        ]);


        DB::table('team')->insert([
            "name" => 'BOGDAN PIDOPRYGORA',
            "title" => 'SENIOR FULL STACK DEVELOPER',
            "image" => '/25.JPG',
            "link" => 'https://www.linkedin.com/in/6ornaii-nlaonpktropa-b65499b4',
            "category" => 'developers',
            "team_order" => "4",
            "description" => "Bogdan is experienced and versatile Senior Software Developer with 4+ years of
experience in full project lifecycle, application design and technical architecture and
web development. He has extensive experience with various web frontend technologies.
Python, JavaScript and related frameworks are one of his core areas of competence.
He can handle all aspects of product development: from the initial phases
of the product life cycle straight through to the launch phase. He can also lead a
development team of dedicated web developers for long-term projects.",
        ]);

        DB::table('team')->insert([
            "name" => 'SHURJIL BUTT',
            "title" => 'Project Manager',
            "image" => '/miranz/1.jpg',
            "link" => 'https://www.linkedin.com/in/muhammad-shurjil-butt-63515518/',
            "category" => 'marketing',
            "team_order" => "1",
            "description" => "Muhammad Shurjil Butt, is the Senior Project Manager. He has been involved in IT
industry for over 12 years managing multiple projects of diverse domains. He has
extensive experience in project management resulting in successful delivery for
multiple top-tier software projects; well in access of $10 million worth in total.",
        ]);

        DB::table('team')->insert([
            "name" => 'GHUFRAN AHMED',
            "title" => 'Solution Architect',
            "image" => '/miranz/2.JPG',
            "link" => 'https://www.linkedin.com/in/ghufran-ahmad-9850a7120/',
            "category" => 'marketing',
            "team_order" => "2",
            "description" => "Having a vast experience in diverse technologies, Ghufran is currently working as a
Solution Architect at Blockchain Experts Solutions for past 6 months. He has done
his Bachelor's degree in Computer Science from National University of Emerging
Sciences , FAST. Previously, Ghufran has worked at Mentor graphics for 4.5 years as
senior software engineer where he gained a vast knowledge of technologies including
java, C, and C++ alongside the working experience on ready-start IDE as well.",
        ]);

        DB::table('team')->insert([
            "name" => 'FARYAL QAZI',
            "title" => 'Lead Research Analyst',
            "image" => '/miranz/3.JPG',
            "link" => 'https://www.linkedin.com/in/faryal-qazi-532541a7/',
            "category" => 'marketing',
            "team_order" => "3",
            "description" => "Faryal is a competent researcher and blockchain business analyst. She has 5 years of
experience in content writing, editing, and public speaking. She is efficient in white
paper writing, blockchain researching, Initial Coin Offerings, and excels in Ethereum,
Quorum, Hyperledger and private blockchains with a number of successful projects.
She is a public speaker and spreads blockchain awareness in various seminars and
summits. She is a tech enthusiast currently pursuing her Master’s degree in Data
Sciences from Information Technology University, Lahore and holds a Bachelor’s
degree in Computer System Engineering from University of Engineering and
Technology.",
        ]);

        DB::table('team')->insert([
            "name" => 'AMMAD UL ISLAM',
            "title" => 'Research Analyst',
            "image" => '/miranz/4.JPG',
            "link" => 'https://www.linkedin.com/in/ammad-ul-islam-683143b3/',
            "category" => 'marketing',
            "team_order" => "4",
            "description" => "Ammad is a passionate, research oriented blockchain enthusiast. He is currently
working as a Research Analyst at Blockchain Expert Solutions where he is efficiently
involved in white paper writing, business analysis, market analysis, and designing
technical models. He has grip over public, private and permissioned blockchains
excelling in Ethereum, Hyperledger, LISK and IOTA as well. He has done his Bachelors
in Computer Sciences from Government College University, Lahore.",
        ]);

        DB::table('team')->insert([
            "name" => 'JUNAID MUSHTAQ',
            "title" => 'Blockchain Expert',
            "image" => '/miranz/5.JPG',
            "link" => 'https://www.linkedin.com/in/junaid-mushtaq-171112126/',
            "category" => 'marketing',
            "team_order" => "5",
            "description" => "Junaid is working as a Senior Software Engineer at MIRANZ Technologies (Pvt.) Ltd.
He has his interests in blockchain development with expertise in Solidity, Ethereum,
Quorum, Hyperledger Fabric, Electron, MeteorJS, NodeJS and Private Blockchains.
He has experience in software development and blockchain development where he
has a number of successful Blockchain projects and ICO’s deployed. Junaid holds a
Bachelor’s degree in Computer Sciences with core focus on Computer Software
Engineering from University of Central Punjab",
        ]);

        DB::table('team')->insert([
            "name" => 'TALHA YUSUF',
            "title" => 'Blockchain Expert',
            "image" => '/miranz/6.JPG',
            "link" => 'https://www.linkedin.com/in/talha-yusuf-66067610b/',
            "category" => 'marketing',
            "team_order" => "6",
            "description" => "Talha Yusuf is an experienced developer, speaker and a blockchain expert. He is
known for conducting blockchain awareness campaign at several well-known platforms
in Pakistan. He entered in blockchain industry in 2017 and in that very short
period of time he developed his skills in three different Blockchains like Ethereum,
Hyperledger Fabric and Stellar. He also worked on tackling scalability issues in
blockchain using IPFS.",
        ]);

        DB::table('team')->insert([
            "name" => 'ZAIN UL ABIDEN',
            "title" => 'Blockchain Expert',
            "image" => '/miranz/7.jpg',
            "link" => 'https://www.linkedin.com/in/zain-ul-abedin-201520148/',
            "category" => 'marketing',
            "team_order" => "7",
            "description" => "Zain Ul Abedin is currently working with Miranz Technologies (Pvt.) Ltd as a Software
Engineer. He is proficient at integrating multiple languages which includes
Java, Swift, Angular, Node JS, Hyperledger Fabric (IBM), .Net, Solidity, C#, C, C++,
SQL / No SQL Databases. Moreover, he is also efficient in developing digital currency
wallets & smart contracts. He is highly inclined towards big data knowing of its
benefits for enterprise Business Solutions.",
        ]);

        DB::table('team')->insert([
            "name" => 'AQEEL KAZMI',
            "title" => 'Blockchain Expert',
            "image" => '/miranz/8.jpg',
            "link" => 'https://www.linkedin.com/in/aqeel-kazmi-090201116/',
            "category" => 'marketing',
            "team_order" => "8",
            "description" => "Aqeel is graduated from Government College University Lahore in Computer
Sciences and have experience in PHP and its related frameworks. He is well versed
in the technology stack and have been currently expanding since, he has branched
out into Blockchain as a Blockchain developer as of and has developed a keen interest
in Blockchain and Decentralized systems. Major works include ethereum smart
contracts, ethereum web3, ethereum crowdsales, ethereum POA Fork, explorers,
wallets, Stellar crowdsales, Hyperledger fabric and Setting up AWS servers for public
and private blockchain.",
        ]);

        DB::table('team')->insert([
            "name" => 'RIZWAN UD DIN',
            "title" => 'Senior Software Engineer',
            "image" => '/miranz/9.jpg',
            "link" => 'https://pk.linkedin.com/in/rizwan-ud-din-0392777b/',
            "category" => 'marketing',
            "team_order" => "9",
            "description" => "Rizwan ud Din is a lead web developer at Blockchain Expert Solutions. He is highly
devoted towards his work and has been involved in software development industry
for last 5 years. He has vast knowledge and hands-on experience in Java, PHP,
Node.Js, Angular, Vue.js and has knowledge of AWS deployment as well. He holds a
Bachelor’s degree in Computer Sciences from Punjab University.",
        ]);


        DB::table('team')->insert([
            "name" => 'ARSLAN IMRAN',
            "title" => 'Senior Software Engineer',
            "image" => '/miranz/10.jpg',
            "link" => 'https://www.linkedin.com/in/arsalan-imran-9258159b/',
            "category" => 'marketing',
            "team_order" => "10",
            "description" => "Arslan Imran is a detail oriented front end developer currently working in Miranz
(.Pvt) Ltd. as Senior Software Engineer. He has experience in HTML, CSS, Bootstrap,
Wordpress, PHP, Laravel, Material Design, Vue.js and other languages. He has a
number of successful projects developed on various platforms. He holds a degree
in IT Sciences from University of Education.",
        ]);

        DB::table('team')->insert([
            "name" => 'ZAINAB GHAFOOR',
            "title" => 'QA Engineer',
            "image" => '/miranz/11.jpg',
            "link" => 'https://www.linkedin.com/in/zainab-ghafoor-1b9184b7/',
            "category" => 'marketing',
            "team_order" => "11",
            "description" => "Zainab is a Software Quality Assurance Engineer, having vast knowledge of software
development lifecycle processes, and testing embedded software. She is proficient
in creating test plans and analyzing test results, coding automated tests and documented
test cases, agile development processing and web-based testing applications,
and interpreting technical and business objectives and challenges. She has
done Bachelors in Computer Sciences from Government College University, Lahore.
She is efficiently delivering her services as a Quality Assurance engineer at Blockchain
Expert Solutions where her expertise include ETL testing, functional testing,
data integration, and unit testing.",
        ]);

        DB::table('team')->insert([
            "name" => 'AFZAL AKRAM',
            "title" => 'Senior UX/UI Designer',
            "image" => '/miranz/12.jpg',
            "link" => 'https://www.linkedin.com/in/afzal-akram-51b6b038/',
            "category" => 'marketing',
            "team_order" => "12",
            "description" => "Having 10 years of experience in web designing, Afzal is a professional graphic
designer, with expertise in Adobe photoshop, Illustrator, and Indesign. He has
previously served as a Senior Graphic Designer in DevBatch, Cryptex and Techverx.
In addition, he has strong HTML/CSS skills including cross power compatibility
issues and extensive knowledge and understanding of SCO. He has completed his
bachelor's degree in Computer Sciences from Skyline College, Dubai. He is currently
working as Sr. Graphic Designer at Blockchain Expert Solutions, where he creates
designs for whitepapers, mobile application designs and websites front end.",
        ]);

        DB::table('team')->insert([
            "name" => 'MAHAM AAMER',
            "title" => 'UI/UX Designer',
            "image" => '/miranz/13.jpg',
            "link" => 'https://www.linkedin.com/in/maham-aamer/',
            "category" => 'marketing',
            "team_order" => "13",
            "description" => "Driven by curiosity of creative details in human computer interaction, Maham
Aamer is one of the finest UI/UX designer in the industry. She did her Bachelors in
Computer Sciences from University of Central Punjab. Being a creative enthusiast,
she believes that an attractive and user friendly design always lead to the success of
products. She believes a good design always focuses on user needs, feels and goals.",
        ]);

        DB::table('team')->insert([
            "name" => 'SHEHREYAR QURESHI',
            "title" => 'Digital Marketing Manager',
            "image" => '/miranz/14.jpg',
            "link" => 'https://www.linkedin.com/in/shehryar-qureshi-202a7555/',
            "category" => 'marketing',
            "team_order" => "14",
            "description" => "Shehryar Qureshi have more than 10 years of experience in Digital Marketing. He
has worked with multinational brands helping them to grow from startups to complete
multinationals. He has served in multiple industries including real estate,
health, media and IT. In his vast experience, he has developed liaison with top news
agencies including Reuters, Bloomberg, Forbes, BBC, Huffington Post and many
more.",
        ]);

        DB::table('team')->insert([
            "name" => 'MAIRA ZAFAR',
            "title" => 'Social Media Manager',
            "image" => '/miranz/15.jpg',
            "link" => 'https://www.linkedin.com/in/maira-zafar/',
            "category" => 'marketing',
            "team_order" => "15",
            "description" => "Maira Zafar is a passionate social media manager with experience in different social
media marketing campaigns. She is currently working with Miranz Technologies
(Pvt.) Ltd. where she is efficiently managing various social media handles. She has
managed global marketing projects where she has played her part in marketing
content, generating organic followers, SEO, and managing leads. Previously, she has
worked as graphics designer and is well versed with photoshop, Illustrator and 3D
Designing. She has secured her degree in IT from University of Education, Lahore.",
        ]);



    }
}
