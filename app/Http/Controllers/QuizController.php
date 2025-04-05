<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    // Static questions array (you can modify this to be fetched from the database if needed)
    private $questions = [
        [
            'question' => 'What is the strategic role of HR in an organization?',
            'options' => [
                'Ensuring compliance with laws and regulations',
                'Aligning HR policies with business goals and driving organizational growth',
                'Managing day-to-day employee grievances',
                'Processing payroll and benefits'
            ],
            'answer' => 'Aligning HR policies with business goals and driving organizational growth'
        ],
        [
            'question' => 'Which of the following describes human capital management?',
            'options' => [
                'Tracking employee attendance',
                'Viewing employees as assets to invest in for maximizing organizational value',
                'A method of conducting annual appraisals',
                'Ensuring compliance with workplace regulations'
            ],
            'answer' => 'Viewing employees as assets to invest in for maximizing organizational value'
        ],
        [
            'question' => 'Which workforce planning tool is used to identify critical roles and their future replacements?',
            'options' => [
                'Balanced Scorecard',
                'Succession planning',
                'SWOT Analysis',
                'Employee Net Promoter Score (eNPS)'
            ],
            'answer' => 'Succession planning'
        ],
        [
            'question' => 'What does a high employee turnover rate indicate?',
            'options' => [
                'Employees are highly engaged',
                'Employees are leaving the organization at an increased pace',
                'Recruitment processes are highly effective',
                'Workforce planning is successful'
            ],
            'answer' => 'Employees are leaving the organization at an increased pace'
        ],
        [
            'question' => 'What is the main objective of job evaluation?',
            'options' => [
                'Enhancing employee satisfaction',
                'Determining the relative worth of a job within an organization',
                'Assessing employee performance',
                'Streamlining recruitment processes'
            ],
            'answer' => 'Determining the relative worth of a job within an organization'
        ],
        [
            'question' => 'In HR analytics, what does predictive analytics focus on?',
            'options' => [
                'Analyzing historical HR data',
                'Forecasting future trends and outcomes',
                'Measuring current workforce engagement',
                'Tracking compliance violations'
            ],
            'answer' => 'Forecasting future trends and outcomes'
        ],
        [
            'question' => 'What is a competency framework?',
            'options' => [
                'A tool for measuring employee performance only',
                'A model that defines the skills, knowledge, and behaviors required for specific roles',
                'A system for processing employee benefits',
                'A legal document outlining employment terms'
            ],
            'answer' => 'A model that defines the skills, knowledge, and behaviors required for specific roles'
        ],
        [
            'question' => 'What is constructive dismissal?',
            'options' => [
                'When an employer terminates an employee for gross misconduct',
                'When an employee is forced to resign due to employer’s behavior',
                'A layoff due to redundancy',
                'A termination following performance reviews'
            ],
            'answer' => 'When an employee is forced to resign due to employer’s behavior'
        ],
        [
            'question' => 'What does psychometric testing aim to assess during recruitment?',
            'options' => [
                'Candidate’s technical skills',
                'Candidate’s personality, cognitive abilities, and aptitude',
                'Candidate’s physical health',
                'Candidate’s background verification'
            ],
            'answer' => 'Candidate’s personality, cognitive abilities, and aptitude'
        ],
        [
            'question' => 'Which HR strategy is most effective in fostering innovation?',
            'options' => [
                'Strict performance management',
                'Diversity and inclusion practices',
                'Micromanagement of teams',
                'Lengthy hierarchical approval processes'
            ],
            'answer' => 'Diversity and inclusion practices'
        ],
        [
            'question' => 'What is the key purpose of competency-based interviews?',
            'options' => [
                'To focus on behavioral evidence for specific skills',
                'To assess only technical qualifications',
                'To check cultural fit',
                'To review resumes in-depth'
            ],
            'answer' => 'To focus on behavioral evidence for specific skills'
        ],
        [
            'question' => 'What is the Hawthorne Effect in HR context?',
            'options' => [
                'A theory on employee turnover',
                'The tendency of people to perform better when they feel observed',
                'A method of conflict resolution',
                'A framework for job analysis'
            ],
            'answer' => 'The tendency of people to perform better when they feel observed'
        ],
        [
            'question' => 'What does the balanced scorecard method measure in HR?',
            'options' => [
                'Employee satisfaction',
                'Financial, customer, internal processes, and learning & growth metrics',
                'Training effectiveness',
                'Workforce diversity'
            ],
            'answer' => 'Financial, customer, internal processes, and learning & growth metrics'
        ],
        [
            'question' => 'What is employer branding?',
            'options' => [
                'Creating a positive public image of the organization to attract top talent',
                'Designing company logos and promotional materials',
                'Standardizing recruitment processes',
                'Improving workplace safety policies'
            ],
            'answer' => 'Creating a positive public image of the organization to attract top talent'
        ],
        [
            'question' => 'What is labor market segmentation?',
            'options' => [
                'Dividing employees into performance tiers',
                'Classifying job markets into distinct subgroups based on skills, industries, or demographics',
                'Evaluating competition for talent',
                'Ranking employees based on engagement surveys'
            ],
            'answer' => 'Classifying job markets into distinct subgroups based on skills, industries, or demographics'
        ],
        [
            'question' => 'In organizational development, what is the Lewin’s Change Management Model?',
            'options' => [
                'A framework for evaluating employee training programs',
                'A three-step process: unfreezing, changing, and refreezing',
                'A theory of recruitment',
                'A guide for preparing job descriptions'
            ],
            'answer' => 'A three-step process: unfreezing, changing, and refreezing'
        ],
        [
            'question' => 'What does HR benchmarking involve?',
            'options' => [
                'Comparing HR policies and practices with competitors or industry standards',
                'Conducting employee satisfaction surveys',
                'Reviewing performance management systems',
                'Evaluating the success of leadership programs'
            ],
            'answer' => 'Comparing HR policies and practices with competitors or industry standards'
        ],
        [
            'question' => 'What is the purpose of gap analysis in HR?',
            'options' => [
                'To identify and bridge the gap between current and desired workforce competencies',
                'To improve employee attendance',
                'To assess payroll discrepancies',
                'To ensure compliance with legal standards'
            ],
            'answer' => 'To identify and bridge the gap between current and desired workforce competencies'
        ],
        [
            'question' => 'What is job enrichment?',
            'options' => [
                'Increasing job responsibilities to make the role more meaningful and rewarding',
                'Adding more employees to a team',
                'Reducing workload for efficiency',
                'Outsourcing jobs to increase productivity'
            ],
            'answer' => 'Increasing job responsibilities to make the role more meaningful and rewarding'
        ],
        [
            'question' => 'What is the Pay Equity Act aimed at addressing?',
            'options' => [
                'Reducing employee turnover',
                'Ensuring equal pay for equal work regardless of gender or other biases',
                'Increasing overall compensation budgets',
                'Restricting pay raises to high performers'
            ],
            'answer' => 'Ensuring equal pay for equal work regardless of gender or other biases'
        ],
        [
            'question' => 'What does the term VUCA represent in the context of HR?',
            'options' => [
                'Vision, Understanding, Control, Action',
                'Volatility, Uncertainty, Complexity, Ambiguity',
                'Value, Unity, Collaboration, Agility',
                'Virtual, Unified, Consistent, Agile'
            ],
            'answer' => 'Volatility, Uncertainty, Complexity, Ambiguity'
        ],
        [
            'question' => 'What is the primary focus of HRIS (Human Resource Information System)?',
            'options' => [
                'Automating HR processes and managing employee data',
                'Conducting diversity training',
                'Designing employee wellness programs',
                'Leading organizational restructuring'
            ],
            'answer' => 'Automating HR processes and managing employee data'
        ],
        [
            'question' => 'What is critical incident technique in performance management?',
            'options' => [
                'A method to handle workplace emergencies',
                'A system of documenting and evaluating significant events in employee performance',
                'A framework for evaluating team productivity',
                'An approach to reward top performers'
            ],
            'answer' => 'A system of documenting and evaluating significant events in employee performance'
        ],
        [
            'question' => 'What is the purpose of a human resource audit?',
            'options' => [
                'Reviewing the financial records of HR',
                'Evaluating HR policies, practices, and compliance to improve effectiveness',
                'Tracking employee performance ratings',
                'Approving hiring budgets'
            ],
            'answer' => 'Evaluating HR policies, practices, and compliance to improve effectiveness'
        ],
        [
            'question' => 'What does Total Rewards encompass in HR?',
            'options' => [
                'Only direct compensation',
                'Direct compensation, benefits, work-life balance, performance recognition, and development opportunities',
                'Training budgets only',
                'Retirement plans'
            ],
            'answer' => 'Direct compensation, benefits, work-life balance, performance recognition, and development opportunities'
        ]
    ];
    public function showQuiz()
    {
        // Randomly pick 10 questions
        $randomQuestions = collect($this->questions)->random(10);

        return view('index', compact('randomQuestions'));
    }

    public function submitQuiz(Request $request)
    {
        // Decode the submission data from the request
        $submissionData = json_decode($request->input('submissionData'), true);

        $score = 0;
        $total = count($submissionData);

        // Loop through each submitted answer and check if it matches the correct answer
        foreach ($submissionData as $data) {
            if ($data['selectedAnswer'] ===  $data['correctAnswer']) {
                $score++;
            }
        }

        // Calculate the percentage of correct answers
        $percentage = ($score / $total) * 100;

        return response()->json([
            'percentage' => $percentage, // Add percentage to the response,
            'questions' => $submissionData // Add submitted questions to the response
        ]);

    }

}
