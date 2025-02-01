USE politics;

-- Seed data for policy categories
INSERT INTO policy_categories (name, description, description_bangla) VALUES
('Governance', 'Policies related to administration and public service.', 'প্রশাসন এবং জনসেবার সাথে সম্পর্কিত নীতিসমূহ।'),
('Economy', 'Policies focusing on economic growth and stability.', 'অর্থনৈতিক প্রবৃদ্ধি এবং স্থিতিশীলতার উপর কেন্দ্রিত নীতিসমূহ।'),
('Law & Justice', 'Policies regarding legal system and judiciary.', 'আইন ব্যবস্থা এবং বিচার বিভাগের সাথে সম্পর্কিত নীতিসমূহ।');

-- Seed data for policy topics
INSERT INTO policy_topics (category_id, name, description, description_bangla) VALUES
(1, 'Public Sector Reform', 'Improving transparency and efficiency in government.', 'সরকারে স্বচ্ছতা এবং দক্ষতা বৃদ্ধির জন্য।'),
(1, 'E-Governance', 'Digitization of government services.', 'সরকারি পরিষেবাগুলোর ডিজিটালাইজেশন।'),
(2, 'Tax Policy', 'Strategies for taxation and revenue generation.', 'কর এবং রাজস্ব আহরণের কৌশল।'),
(2, 'Employment Generation', 'Policies to create job opportunities.', 'চাকরির সুযোগ তৈরির জন্য নীতিসমূহ।'),
(3, 'Judicial Independence', 'Ensuring a fair and independent judiciary.', 'একটি নিরপেক্ষ এবং স্বাধীন বিচার ব্যবস্থা নিশ্চিতকরণ।'),
(3, 'Criminal Justice Reform', 'Reforming laws to improve justice system.', 'বিচার ব্যবস্থার উন্নতির জন্য আইন সংস্কার।');

-- Seed data for policy details
INSERT INTO policy_details (topic_id, content, content_bangla) VALUES
(1, 'Public sector reform focuses on eliminating corruption, ensuring accountability, and improving efficiency.', 'সরকারি খাতে সংস্কার দুর্নীতি দূরীকরণ, জবাবদিহিতা নিশ্চিতকরণ এবং দক্ষতা বৃদ্ধির উপর গুরুত্ব দেয়।'),
(2, 'E-Governance improves access to services and reduces bureaucracy.', 'ই-গভর্নেন্স পরিষেবাগুলোর প্রবেশাধিকার সহজতর করে এবং আমলাতান্ত্রিকতা হ্রাস করে।'),
(3, 'A progressive tax policy ensures fair wealth distribution.', 'একটি প্রগতিশীল কর নীতি ন্যায্য সম্পদ বণ্টন নিশ্চিত করে।'),
(4, 'Policies promoting entrepreneurship lead to more job creation.', 'উদ্যোক্তা বৃদ্ধির জন্য গৃহীত নীতিসমূহ অধিক কর্মসংস্থান সৃষ্টি করে।'),
(5, 'An independent judiciary prevents government interference in legal matters.', 'একটি স্বাধীন বিচার ব্যবস্থা সরকারী হস্তক্ষেপ রোধ করে।'),
(6, 'Reforming criminal laws to make them fair and effective.', 'অপরাধমূলক আইন সংস্কার করে এগুলোকে আরও ন্যায্য এবং কার্যকর করা।');

-- Seed data for members
INSERT INTO members (name, email, password_hash, role) VALUES
('John Doe', 'john@example.com', SHA2('password123', 256), 'Admin'),
('Jane Smith', 'jane@example.com', SHA2('securepass', 256), 'Member'),
('Ali Khan', 'ali@example.com', SHA2('mypassword', 256), 'Guest');

-- Seed data for campaigns
INSERT INTO campaigns (title, description, description_bangla, event_date, location) VALUES
('Election Rally 2025', 'A campaign rally to discuss future policies.', 'ভবিষ্যৎ নীতিসমূহ নিয়ে আলোচনা করার জন্য একটি প্রচার সমাবেশ।', '2025-05-10 15:00:00', 'City Center, Dhaka'),
('Youth Employment Initiative', 'Launching a program for job creation.', 'চাকরির সুযোগ বৃদ্ধির জন্য একটি কর্মসূচির সূচনা।', '2025-06-15 10:00:00', 'National Auditorium, Chattogram'),
('Legal Awareness Drive', 'Spreading awareness about citizens’ legal rights.', 'নাগরিকদের আইনি অধিকার সম্পর্কে সচেতনতা বৃদ্ধি।', '2025-07-20 14:00:00', 'Law College, Rajshahi');
