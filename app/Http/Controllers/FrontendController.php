<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.who-we-are.index');
    }
    public function employers()
    {
        return view('frontend.employers-2.index');
    }
    public function candidate()
    {
        return view('frontend.candidates-2.index');
    }
    public function findJob()
    {
        return view('frontend.find-job.index');
    }
    public function government()
    {
        return view('frontend.government.index');
    }
    public function blogs()
    {
        return view('frontend.bridgecor-blogs.index');
    }
    public function research()
    {
        return view('frontend.bridgecor-blogs.research.index');
    }
    public function newsTrends()
    {
        return view('frontend.bridgecor-blogs.news-trends.index');
    }
    public function legalCompliance()
    {
        return view('frontend.bridgecor-blogs.legal-compliance.index');
    }
    public function HRtopics()
    {
        return view('frontend.bridgecor-blogs.hr-topics.index');
    }
    public function expertAdvice()
    {
        return view('frontend.bridgecor-blogs.expert-advice.index');
    }
    public function industryTrends()
    {
        return view('frontend.bridgecor-blogs.industry-insights-and-trends.index');
    }
    public function interviewSuccess()
    {
        return view('frontend.bridgecor-blogs.interview-success-tips.index');
    }
    public function careerGuidance()
    {
        return view('frontend.bridgecor-blogs.career-guidance-and-skill-development.index');
    }
    public function contact()
    {
        return view('frontend.contact.index');
    }
    public function masteringPanel()
    {
        return view('frontend.mastering-panel-interviews-strategies-for-success-in-group-interview-settings.index');
    }
    public function mentorship()
    {
        return view('frontend.mentorship-matters-the-impact-of-mentorship-on-career-development.index');
    }
    public function timeManagement()
    {
        return view('frontend.strategies-for-effective-time-management-insights-from-industry-experts.index');
    }
    public function softSkills()
    {
        return view('frontend.cultivating-soft-skills-the-unseen-trend-in-hiring.index');
    }
    public function trends()
    {
        return view('frontend.navigating-the-current-job-market-trends-and-opportunities-for-career-growth.index');
    }
    public function virtualInterview()
    {
        return view('frontend.nailing-the-virtual-interview-a-comprehensive-guide-to-success-in-remote-job-interviews.index');
    }
    public function platforms()
    {
        return view('frontend.navigating-online-learning-platforms-a-comprehensive-guide-to-choosing-the-right-courses.index');
    }
    public function visions()
    {
        return view('frontend.crafting-a-vision-the-blueprint-for-your-professional-future.index');
    }
    public function demystifying()
    {
        return view('frontend.demystifying-the-role-of-an-it-security-engineer-navigating-the-depths-of-responsibilities-and-skills.index');
    }
    public function diversity()
    {
        return view('frontend.diversity-in-the-workplace-legal-considerations.index');
    }
    public function ethical()
    {
        return view('frontend.the-ethical-recruiter-ensuring-compliance-in-talent-acquisition.index');
    }
    public function staff()
    {
        return view('frontend.staff-augmentation-trends-what-the-future-holds.index');
    }
    public function remote()
    {
        return view('frontend.remote-work-revolution-insights-from-the-current-market-research.index');
    }
    public function performance()
    {
        return view('frontend.mastering-the-art-of-effective-performance-reviews-a-guide-for-growth.index');
    }
    public function professionls()
    {
        return view('frontend.demystifying-employment-laws-a-quick-reference-for-hr-professionals.index');
    }
    public function tech()
    {
        return view('frontend.tech-trends-in-talent-acquisition-a-guide-for-modern-businesses.index');
    }
    public function talent()
    {
        return view('frontend.tech-breakthroughs-how-ai-is-revolutionizing-talent-acquisition.index');
    }
    public function global()
    {
        return view('frontend.global-perspectives-security-clearance-jobs-in-international-settings.index');
    }
    public function cyber()
    {
        return view('frontend.the-role-of-soft-skills-in-cybersecurity-recruiting-a-holistic-approach-to-talent-acquisition.index');
    }
    public function local()
    {
        return view('frontend.local-heroes-exploring-the-impact-of-it-staffing-agencies-in-the-usa.index');
    }
    public function potential()
    {
        return view('frontend.strategic-staffing-in-the-digital-age-unlocking-potential-with-bridgecor-llc.index');
    }

    public function futureofsecurity()
    {
        return view('frontend.cracking-the-code-how-cybersecurity-recruitment-agencies-like-bridgecor-llc-shape-the-future-of-security.index');
    }

    public function futureofdigital()
    {
        return view('frontend.from-resumes-to-resilience-how-cybersecurity-recruitment-agencies-shape-the-future-of-digital-defense.index');
    }

    public function futureready()
    {
        return view('frontend.future-ready-workforce-trends-in-it-staffing-and-recruitment.index');
    }

    public function horizon()
    {
        return view('frontend.navigating-the-digital-horizon-it-engineering-at-its-finest.index');
    }
    public function techMavericks()
    {
        return view('frontend.tech-mavericks-unleashing-innovation-through-bridgecor-llcs-it-staffing-solutions.index');
    }

    public function unlockingSuccess()
    {
        return view('frontend.unlocking-success-how-security-clearance-jobs-shape-your-career-path.index');
    }

    public function cybersecurityInEngineering()
    {
        return view('frontend.cybersecurity-in-it-engineering-services-navigating-the-digital-threat-landscape.index');
    }

    public function unlockingBusinessPotential()
    {
        return view('frontend.unlocking-business-potential-a-comprehensive-guide-to-enhancing-agility-with-it-engineering-services.index');
    }

    public function balancingAct()
    {
        return view('frontend.balancing-act-how-it-staffing-companies-navigate-the-demand-for-specialized-vs-generalist-skills.index');
    }
}
