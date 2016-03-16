INSERT INTO `blog` (`title`, `subtitle`, `date`, `url`) VALUES

('Lorem Ipsum.', 'The Difference Bewteen a Coder and a Developer', '2016-01-27', 'app/model/blog/blog1.md'), 

('Almost a Waste of Time', 'Sugar-coded Lessons in Programming in PHP', '2015-07-16', 'app/model/blog/blog2.md'),

('Agile Done Wrong', 'My Experienced Side-Effects of Poor Task Capacity Estimation', '2016-03-10', 'app/model/blog/blog3.md'),

('Goal Setting is Writing Your Brain a &#8478', 'Why Goals are Like Prescriptions', '2015-10-08', 'app/model/blog/blog4.md'),

('How to Predict The Future', 'What I Learned From The Lego Movie', '2015-10-04', 'app/model/blog/blog5.md'),

('What It&#39s Like to Learn JavaScript In Two Weeks', 'And Why I&#39ll Never Do That Again', '2016-01-21', 'app/model/blog/blog6.md'),

('The Week My Brain Crashed Three Times', 'A Season of SQL', '2015-12-04', 'app/model/blog/blog7.md'),

(' My Kid is Annoying. Here&#39s Why I Love It', 'Tips I&#39 Learned to Combat &#39Mommy! Mommy! Mommy&#39 Syndrome', '2016-03-15', 'app/model/blog/blog8.md');

INSERT INTO `portfolio` (`title`,`class_id`,`description`,`url`,`category`,`tags`,`date`) VALUES

('The Faustian Bargain of Everyday Technology', 1, 'Pick a technology you use every day, such as a Kindle, iPhones, Facebook, Twitter, Wikipedia, YouTube. Then, using this technology as an example, describe both how it might fulfill at least two of Masuda’s predictions for our information society (for example, foster voluntary communities, break down hierarchies, empower citizen movements, or spur individual knowledge creation), and how it also might present what Postman calls a “Faustian bargain”.', 'app/model/portfolio/proj01.md', 'Assignment', '["technology", "web 2.0", "faustian bargain"]', '2014-02-08'),

('Assessing the Nature of Information Science', 1, 'Referencing the “Information Machine” and “Information” videos, describe the nature and function of the discipline of Information Science, the types of problems it addresses, and discuss an example of an information system or technology that helps solve these problems.', 'app/model/portfolio/proj02.md', 'Assignmennt', '["information", "information science"]', '2014-02-08'),

('Web 2.0 Information Systems', 1, 'Thinking of the information system described in your response to question 1 above, identify a digital or Web 2.0 technology that performs a similar function. Describe how any of Masuda’s key predictions are enhanced with this contemporary technology, and describe at least one way it might also result it what Postman describes as a Faustian bargain of technology. How might it both “giveth” and “taketh away”?', 'app/model/portfolio/proj02.md', 'Assignment', '["web 2.0", "information technology", "information science" , "information", faustian bargain"]', '2014-02-28'),

('Shedding Light on the Dark Side of the Internet: The Dangers and Mysteries of the Deep Web', 1, 'Final Paper from professor-accepted proposal.', 'app/model/portfolio/proj03.md', 'Paper', '["dark web","information science","deep web", "information", "information"]', '2014-05-15'),

('Final Annotated Biliography', 2, 'College-level annotated bibliography', 'app/model/portfolio/proj04.md', 'Paper', '["bibliography", "information science", "lgbt"]', '2014-05-12'),

('Are They Indexing Us?: An Assessment of Predictive Analytics', 3, 'Video Response', 'app/model/portfolio/proj05.md', 'Essay', '["predictive analysis", "indexing", "information science", "google"]', '2014-03-06'),

('Pre-Coordinate Index', 3, 'Indexing an expert of a textbook according to industry standards', 'app/model/portfolio/proj06.md', 'Assignment', '["pre-coordinate index, "index", "organization", "information science"]', '2014-03-14'),

('Indicative Absract', 3, 'Abstract for an expert of a textbook', 'app/model/portfolio/proj07.md', 'Writing', '["abstract", "abstract"]', '2014-02-25');

INSERT INTO `class` (`class_id`,`course`,`professor`,`year`,`semester`,`summary`) VALUES 

('Introduction to Information Science', '')