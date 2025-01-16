<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrTerminologyController extends Controller
{
    public function showPage()
    {
        // Static data grouped by letter and type
        $terms = [
            'A' => [
                'type1' => [
                    'Applicant Tracking System (ATS): Software for managing recruitment processes.',
                    'Attrition: The natural reduction of the workforce due to resignations, retirements, or terminations.',
                    'Assessment Centers: A method to evaluate candidates\' suitability for roles through simulations and exercises.',
                    'Agile HR: Flexible and collaborative HR practices adapted from agile methodologies.',
                    'Attendance Management: Tracking employee attendance to ensure workforce productivity.',
                ],
                'type2' => [
                    'Application Form: A standard document used by candidates to apply for a job.',
                    'Academic Background: The level of education and certifications obtained by an employee.',
                    'Appraisal System: Process of evaluating employees\' work performance.',
                    'Automation in HR: The use of technology to automate repetitive HR tasks.',
                    'Agency Recruitment: The practice of using third-party recruitment agencies to find talent.',
                ],
            ],
            'B' => [
                'type1' => [
                    'Benefits: Non-monetary perks offered to employees, such as insurance or wellness programs.',
                    'Benchmarking: Comparing HR metrics with industry standards to improve practices.',
                    'Bonus: Additional financial rewards tied to performance or organizational success.',
                    'Behavioral Interviewing: A technique that evaluates candidates based on past behavior in specific situations.',
                    'Burnout: Physical and emotional exhaustion due to prolonged workplace stress.',
                ],
                'type2' => [
                    'Budget Allocation: Distributing financial resources within HR to various activities.',
                    'Benevolent Fund: A fund for employees in need, often for emergencies or assistance.',
                    'Brand Equity: The value of the company’s brand in the labor market.',
                    'Board of Directors: A group responsible for overseeing the company’s governance.',
                    'Bait & Switch: A tactic in recruitment where a job description is misleading.',
                ],
            ],
            'C' => [
                'type1' => [
                    'Compensation: Total remuneration, including salary, bonuses, and benefits.',
                    'Culture Fit: Alignment between an employee’s values and the organization’s culture.',
                    'Conflict Resolution: Techniques for managing and resolving workplace disputes.',
                    'Career Development: Support for employees\' professional growth through training and mentorship.',
                    'Competency Mapping: Identifying and analyzing the skills required for specific roles.',
                ],
                'type2' => [
                    'Company Values: Core principles and ethics that guide the company’s operations.',
                    'Compliance: Adherence to labor laws, regulations, and company policies.',
                    'Collaboration Tools: Software designed to help employees work together effectively.',
                    'Contract Negotiation: The process of discussing terms and agreements between employer and employee.',
                    'Cross-Training: Teaching employees to perform tasks outside their primary job role.',
                ],
            ],
            'D' => [
                'type1' => [
                    'Diversity & Inclusion (D&I): Promoting workplace equity and representation.',
                    'Disciplinary Action: Measures taken to address employee misconduct.',
                    'Digital HR: Using technology for HR functions like payroll, training, and analytics.',
                    'Development Plan: A structured approach to improving employees\' skills and performance.',
                    'Data-Driven HR: Making HR decisions based on data and analytics.',
                ],
                'type2' => [
                    'Diversity Training: Programs to promote awareness and respect for diversity in the workplace.',
                    'Deputation: Temporary assignment of an employee to a different role or location.',
                    'Delegation: The act of assigning responsibilities to others to achieve tasks.',
                    'Dispute Resolution: The process of resolving disagreements between employees or between employees and management.',
                    'Digital Onboarding: Using digital tools for the employee onboarding process.',
                ],
            ],
            'E' => [
                'type1' => [
                    'Employee Engagement: Level of commitment and enthusiasm employees feel toward their work.',
                    'Exit Interview: Feedback session with departing employees to identify improvement areas.',
                    'Employee Handbook: A guide containing company policies, procedures, and culture.',
                    'Emotional Intelligence: Ability to recognize and manage emotions in oneself and others.',
                    'Employer Branding: Reputation of an organization as an employer.',
                ],
                'type2' => [
                    'E-Learning: Online training programs for employee development.',
                    'Employee Retention: Efforts to keep employees engaged and reduce turnover.',
                    'Evaluation Criteria: Metrics used to assess employee performance.',
                    'Employee Survey: A tool used to gather feedback from employees on various work-related matters.',
                    'External Recruitment: Hiring candidates from outside the organization.',
                ],
            ],
            'F' => [
                'type1' => [
                    'Feedback: Constructive guidance given to employees to improve performance.',
                    'Flexible Work: Non-traditional work arrangements like remote work or flex hours.',
                    'Full-Time Equivalent (FTE): A unit that indicates workload in terms of full-time employees.',
                    'Family Leave: Time off granted for family-related responsibilities like childbirth.',
                    'Fair Labor Standards Act (FLSA): U.S. law governing minimum wage and overtime pay.',
                ],
                'type2' => [
                    'Facilitator: A person who helps manage group discussions or processes.',
                    'Furlough: Temporary leave from work, often due to budget constraints.',
                    'Flexible Benefits: Benefits that employees can choose based on their preferences.',
                    'Formal Training: Structured and planned educational programs within the workplace.',
                    'Freelancers: Independent contractors hired for short-term work.',
                ],
            ],
            'G' => [
                'type1' => [
                    'Goal Setting: Defining clear objectives for employees or teams.',
                    'Gross Pay: Total earnings before deductions like taxes and benefits.',
                    'Grievance Handling: Addressing employee complaints fairly and effectively.',
                    'Gig Workers: Individuals working on temporary or freelance contracts.',
                    'Generational Diversity: Understanding and managing differences among age groups in the workforce.',
                ],
                'type2' => [
                    'Global HR: Managing HR functions across different countries and cultures.',
                    'Green HR: Environmentally friendly HR practices, such as reducing waste.',
                    'Group Incentives: Rewards given to a team or department for collective performance.',
                    'Grievance Redressal: A formal process for addressing employee complaints.',
                    'Gross Margin: The difference between revenue and the cost of goods sold.',
                ],
            ],
            'H' => [
                'type1' => [
                    'Human Capital: The skills, knowledge, and experience of employees.',
                    'HR Analytics: Use of data to optimize HR strategies.',
                    'Hybrid Work: A combination of remote and in-office work arrangements.',
                    'High-Potential Employee (HiPo): Employees identified for future leadership roles.',
                    'Health and Safety: Ensuring a safe and healthy work environment.',
                ],
                'type2' => [
                    'Hiring Process: The sequence of steps involved in bringing new employees on board.',
                    'Holiday Pay: Additional compensation given for holidays worked.',
                    'HRIS (Human Resource Information System): Software used to manage HR-related data.',
                    'Health Insurance: Insurance coverage for medical expenses.',
                    'Human Resources Strategy: A plan that aligns HR functions with the overall business goals.',
                ],
            ],
            'I' => [
                'type1' => [
                    'Internal Recruitment: Filling positions with current employees.',
                    'Interviewing: The process of evaluating candidates for a job.',
                    'Inclusive Leadership: Leaders fostering diverse and equitable environments.',
                    'Individual Development Plan (IDP): Personalized plan for employee growth.',
                    'Immigration Compliance: Ensuring legal authorization for employees to work.',
                ],
                'type2' => [
                    'Incentive Plan: A structured program that rewards employees for achieving performance targets.',
                    'Independent Contractors: Employees working under contract but not as regular employees.',
                    'Interpersonal Skills: Ability to interact effectively with others.',
                    'Intellectual Property (IP): Ownership rights of ideas or inventions.',
                    'Income Tax: Taxation on employee earnings.',
                ],
            ],
            'J' => [
                'type1' => [
                    'Job Description: A detailed explanation of a role’s responsibilities and requirements.',
                    'Job Shadowing: Observing a professional to learn about a specific role.',
                    'Job Rotation: Moving employees between roles to build skills and experience.',
                    'Job Evaluation: Assessing a role’s value to determine appropriate compensation.',
                    'Job Satisfaction: The level of fulfillment employees feel in their jobs.',
                ],
                'type2' => [
                    'Job Offer: An invitation extended to a candidate to join the organization.',
                    'Job Market: The supply and demand of job opportunities within a specific industry.',
                    'Job Promotion: Advancement to a higher position or role within the organization.',
                    'Job Enrichment: Enhancing a job’s responsibilities to increase motivation and satisfaction.',
                    'Job Analysis: Studying a job to identify essential tasks, skills, and qualifications.',
                ],
            ],
            'K' => [
                'type1' => [
                    'Key Performance Indicators (KPIs): Metrics used to measure employee and organizational success.',
                    'Knowledge Management: Process of capturing, distributing, and effectively using knowledge.',
                    'Knowledge Transfer: The process of sharing knowledge between employees or teams.',
                    'Kick-off Meeting: The initial meeting to start a project or onboarding process.',
                    'Keen Observation: Ability to notice and interpret relevant details in the workplace.',
                    'Karma: Organizational philosophy that emphasizes the consequences of actions and ethics.',
                ],
                'type2' => [
                    'Keen Interest: Displaying a strong enthusiasm for specific projects or roles.',
                    'Key Roles: Positions critical to the success of an organization or project.',
                    'Kiosk Recruitment: Using self-service kiosks for recruitment and onboarding in high-volume hiring.',
                    'K-Form (Kanban Form): A visual tool for organizing recruitment tasks and workflows.',
                ],
            ],
            'L' => [
                'type1' => [
                    'Leadership Development: Programs designed to improve leadership skills and capabilities.',
                    'Lateral Move: Changing roles within an organization at the same level.',
                    'Learning and Development (L&D): Programs aimed at improving employee skills and knowledge.',
                    'Leave of Absence: Authorized time off from work for personal or medical reasons.',
                    'Leadership Styles: Various approaches to managing and guiding employees.',
                ],
                'type2' => [
                    'Labor Relations: The relationship between management and employees, especially concerning labor laws.',
                    'Layoff: Termination of employees due to economic conditions or organizational restructuring.',
                    'Learning Management System (LMS): Software used to deliver, track, and manage training programs.',
                    'Loyalty Programs: Rewards given to employees to encourage long-term commitment to the company.',
                    'Long-Term Disability: Insurance that covers extended employee absence due to illness or injury.',
                ],
            ],
            'M' => [
                'type1' => [
                    'Millennials: The generational cohort born between 1981 and 1996, often discussed in terms of workplace behavior.',
                    'Mentoring: A developmental relationship where a more experienced employee helps guide a less experienced one.',
                    'Motivation: The internal drive or desire that causes individuals to achieve goals.',
                    'Morale: The overall mood and satisfaction level of employees in an organization.',
                    'Market Rate: The average compensation for a role in the external labor market.',
                ],
                'type2' => [
                    'Maternity Leave: Time off granted to employees due to pregnancy or childbirth.',
                    'Medical Benefits: Healthcare coverage provided by the employer.',
                    'Mobile Recruiting: Using mobile devices and applications to recruit and communicate with candidates.',
                    'Minimum Wage: The lowest legal wage that an employer can pay employees.',
                    'Managerial Training: Programs designed to improve the skills of those in managerial roles.',
                ],
            ],
            'N' => [
                'type1' => [
                    'Negotiation Skills: The ability to discuss and settle terms between parties in an employment context.',
                    'New Hire Orientation: The process of integrating a new employee into an organization.',
                    'Non-Disclosure Agreement (NDA): A legal contract where employees agree not to share confidential information.',
                    'Networking: Building and maintaining professional relationships within and outside the organization.',
                    'Non-compete Clause: A contract stipulation that prevents employees from working for competitors after leaving the company.',
                ],
                'type2' => [
                    'National Labor Relations Act (NLRA): U.S. law governing labor rights and unionization.',
                    'Next-of-Kin: The closest family member of an employee, often listed in case of emergency.',
                    'Non-monetary Rewards: Recognition and benefits that do not involve direct financial compensation.',
                    'Nomination: The process of selecting employees for awards, recognitions, or promotions.',
                    'Notices of Resignation: Official communication submitted by employees to announce their intent to leave the organization.',
                ],
            ],
            'O' => [
                'type1' => [
                    'Onboarding: The process of integrating new employees into the company culture and their specific role.',
                    'Outplacement Services: Assistance provided to employees who are being laid off or terminated.',
                    'Overtime: Work performed beyond an employee’s standard hours, often paid at a higher rate.',
                    'Organizational Development (OD): The planned effort to improve an organization’s effectiveness and efficiency.',
                    'Occupational Health: Programs focused on maintaining the physical and mental well-being of employees.',
                ],
                'type2' => [
                    'Offboarding: The process that involves managing employees who are leaving the organization.',
                    'On-the-job Training: Practical training provided while an employee is performing their work tasks.',
                    'Open Enrollment: The period when employees can enroll in or make changes to their benefits plans.',
                    'Overachiever: An employee who consistently exceeds expectations or targets.',
                    'Organizational Chart: A visual representation of the company’s structure and reporting lines.',
                ],
            ],
            'P' => [
                'type1' => [
                    'Performance Appraisal: The formal evaluation of an employee’s job performance.',
                    'Paternity Leave: Time off granted to fathers around the time of childbirth.',
                    'Promotion: Advancing an employee to a higher position or role with more responsibilities.',
                    'Payroll: The system used for managing employee wages, bonuses, and deductions.',
                    'Personal Development: Ongoing learning and improvement of an employee’s skills and capabilities.',
                ],
                'type2' => [
                    'Probationary Period: The initial period during which an employee is evaluated before becoming permanent.',
                    'Pension Plans: Retirement plans where employees receive regular payments after retirement.',
                    'Public Relations: The management of the company’s image and communication with the outside world.',
                    'Policy Manual: A document containing organizational rules and regulations.',
                    'Performance Metrics: Quantitative measurements used to assess employee productivity and performance.',
                ],
            ],
            'Q' => [
                'type1' => [
                    'Qualifications: The skills, experience, and education required for a specific job role.',
                    'Quit Notice: A formal communication by an employee to announce their resignation from the company.',
                    'Quota System: A method of allocating specific number goals or targets to employees or teams.',
                    'Quality Control: The process of ensuring that products and services meet certain standards.',
                    'Quick Hire: A fast-track hiring process to fill urgent job vacancies.',
                ],
                'type2' => [
                    'Quarterly Review: A performance review conducted every quarter to assess goals and achievements.',
                    'Questionnaire: A form used for collecting data or feedback from employees or candidates.',
                    'Quitting Process: The formal steps involved when an employee leaves the organization.',
                    'Quantitative Skills: Skills related to working with numbers, data, and analytics.',
                    'Quality Assurance: Ensuring products and services are produced to meet defined standards.',
                ],
            ],
            'R' => [
                'type1' => [
                    'Recruitment: The process of attracting and selecting candidates for a job.',
                    'Retention: Strategies aimed at keeping employees engaged and preventing turnover.',
                    'Resume: A summary of an individual’s work experience, education, and skills.',
                    'Rewards and Recognition: Programs aimed at appreciating and compensating employees for their contributions.',
                    'Remote Work: A work arrangement where employees perform their duties outside of a traditional office.',
                ],
                'type2' => [
                    'Referral Program: A recruitment strategy where employees recommend potential candidates.',
                    'Recruitment Funnel: The process of sourcing, screening, and selecting candidates.',
                    'Relocation Assistance: Support offered to employees moving to a new location for their job.',
                    'Reasonable Accommodation: Adjustments made to work environments or processes to support employees with disabilities.',
                    'Retirement Plan: A program designed to help employees save for their post-work life.',
                ],
            ],
            'S' => [
                'type1' => [
                    'Succession Planning: Identifying and preparing employees for key leadership roles.',
                    'Salary: Compensation paid to an employee for their work, typically on a monthly or hourly basis.',
                    'Skill Development: Programs designed to enhance the abilities of employees.',
                    'Staffing: The process of filling vacancies and ensuring appropriate workforce levels.',
                    'Stress Management: Techniques and practices to reduce work-related stress among employees.',
                ],
                'type2' => [
                    'Severance Pay: Financial compensation provided to employees who are laid off or terminated.',
                    'Staff Performance: Evaluation and tracking of employee output and success.',
                    'Sales Incentive: Rewards given to employees for achieving sales targets.',
                    'Succession Planning Strategy: The planned approach to preparing employees for critical positions.',
                    'Self-Assessment: A process where employees evaluate their own performance and development.',
                ],
            ],
            'T' => [
                'type1' => [
                    'Talent Acquisition: The process of finding and hiring skilled employees.',
                    'Training: Programs designed to develop employees’ skills and competencies.',
                    'Team Building: Activities and initiatives to improve collaboration and performance within teams.',
                    'Turnover Rate: The percentage of employees who leave an organization over a specific period.',
                    'Time Management: The ability to plan and allocate time efficiently to tasks and goals.',
                ],
                'type2' => [
                    'Telecommuting: A work arrangement that allows employees to work remotely, typically from home.',
                    'Temporary Employees: Workers hired for short-term roles or projects.',
                    'Total Compensation: The complete package of salary, benefits, and bonuses provided to employees.',
                    'Trainee: An individual undergoing training, often at the start of their career or role.',
                    'Task Management: The process of managing and organizing tasks within a project or team.',
                ],
            ],
            'U' => [
                'type1' => [
                    'Union: An organization that represents employees and negotiates with employers on their behalf.',
                    'Upward Feedback: Feedback provided by employees to their managers or higher-ups.',
                    'Urgent Hiring: A recruitment process that focuses on filling vacancies that need to be addressed immediately.',
                    'Utilization Rate: The percentage of employees’ available time that is spent on productive tasks.',
                    'Unpaid Leave: Time off from work that is not compensated.',
                ],
                'type2' => [
                    'User Experience (UX): The overall experience of a person using a product, especially in terms of how easy or enjoyable it is to use.',
                    'Underperformance: When an employee’s performance falls below the expected or required standards.',
                    'Unstructured Interviews: Interviews that are less formal and more conversational, without predetermined questions.',
                    'Unpaid Overtime: Hours worked beyond the standard workweek that are not compensated.',
                    'Upskilling: The process of teaching employees new skills to help them perform better in their current roles or prepare for future roles.',
                ],
            ],
            'V' => [
                'type1' => [
                    'Vacancy: A job opening that needs to be filled within an organization.',
                    'Voluntary Turnover: When an employee chooses to leave the company, usually through resignation.',
                    'Values: The principles and standards that guide employee behavior and decision-making.',
                    'Verification: The process of confirming the accuracy of candidate information, such as employment history or qualifications.',
                    'Virtual Interviews: Interviews conducted online through video conferencing tools.',
                ],
                'type2' => [
                    'Vision Statement: A declaration that outlines the long-term goals and values of the organization.',
                    'Variable Pay: Compensation that is based on performance or company success, such as bonuses or commissions.',
                    'Volunteering: Employees’ participation in community service or charity work as part of an organization’s corporate social responsibility (CSR) programs.',
                    'Vocational Training: Training programs focused on developing specific job-related skills.',
                    'Vendor Management: The process of overseeing and managing relationships with third-party service providers or suppliers.',
                ],
            ],
            'W' => [
                'type1' => [
                    'Workplace Diversity: The inclusion of individuals from various backgrounds and experiences in the workplace.',
                    'Work-life Balance: The equilibrium between personal time and work responsibilities.',
                    'Workplace Safety: Policies and practices in place to protect employees from workplace hazards.',
                    'Wages: The regular compensation that employees receive in exchange for their labor.',
                    'Workplace Culture: The shared values, beliefs, and practices that shape the environment and behavior within an organization.',
                ],
                'type2' => [
                    'Workforce Planning: The process of ensuring the organization has the right number and types of employees to meet its objectives.',
                    'Wellness Programs: Employee health and well-being initiatives, often including fitness or mental health support.',
                    'Worker’s Compensation: Insurance coverage that provides benefits to employees injured on the job.',
                    'Whistleblower Policy: A policy that protects employees who report illegal or unethical activities within the organization.',
                    'Workplace Flexibility: The ability for employees to have flexible working hours or remote work arrangements.',
                ],
            ],
            'X' => [
                'type1' => [
                    'Xenophobia: Discrimination or prejudice against employees from different nationalities or backgrounds.',
                    'X-Factor: A unique quality or attribute that makes an employee or team stand out.',
                    'Xeroxing: A term sometimes used to describe copying an idea or concept from another organization or individual.',
                    'X-Training: Cross-training employees in different roles to increase versatility within the organization.',
                    'Xenial Culture: A workplace environment characterized by warm hospitality and positive relationships.',
                ],
                'type2' => [
                    'X-Shift: A term used to describe non-traditional work hours, often covering late nights or early mornings.',
                    'X-Teams: Cross-functional teams formed to tackle complex problems that require input from multiple departments.',
                    'X-Rating: A classification sometimes used in the entertainment industry, but can also refer to highly confidential or sensitive information in HR contexts.',
                    'X-Factor Skills: Rare or difficult-to-find talents and capabilities that can significantly improve an organization’s success.',
                    'Xtreme Programming: A software development methodology that emphasizes collaboration and flexibility, though not commonly used in traditional HR terminology.',
                ],
            ],
            'Y' => [
                'type1' => [
                    'Year-End Review: The annual performance review, where employees and employers evaluate performance over the past year.',
                    'Yield: The effectiveness of recruitment efforts in hiring qualified candidates.',
                    'Youth Employment: The hiring and employment of young individuals, often through internships or entry-level positions.',
                    'Yellow Card: A formal warning issued to an employee for minor infractions or misconduct.',
                    'Your Benefits: Refers to the total benefits package an employee receives, including health insurance, paid time off, and other perks.',
                ],
                'type2' => [
                    'YTD (Year-to-Date): Refers to the period starting from the beginning of the current year to the present date.',
                    'Yellow-Flagged Candidate: A candidate whose application has raised concerns or issues during the hiring process.',
                    'Yoga Programs: Workplace wellness initiatives that incorporate yoga for improving employee health and well-being.',
                    'Youth Training: Programs aimed at preparing young individuals for the workforce.',
                    'Yield Ratio: The proportion of job applicants who are hired compared to the total number of applicants.',
                ],
            ],
            'Z' => [
                'type1' => [
                    'Zero Tolerance Policy: A strict policy that mandates harsh consequences for certain violations or behaviors.',
                    'Zero-Defect Culture: A workplace culture where the goal is to eliminate errors and inefficiencies.',
                    'Zoning: The practice of categorizing different job roles or employees into specific teams or areas based on skill set or focus.',
                    'Zero Hour Contract: A type of employment contract where the employer does not guarantee any specific number of work hours.',
                    'Z-Score: A statistical measure used in some industries to evaluate employee or team performance.',
                ],
                'type2' => [
                    'Zenith: The highest point of achievement or success within an organization or career.',
                    'Zero-Emission Work: A concept focusing on reducing the environmental impact of workplace activities.',
                    'Zoning Laws: Legal restrictions on how employers can manage office space or allocate resources.',
                    'Zoning System: A classification system used for categorizing job roles or departments within the organization.',
                    'Zoom Recruitment: Using the video conferencing tool Zoom for interviewing candidates remotely.',
                ],
            ]
        ];

        return view('hr-terminology', compact('terms'));
    }
}
