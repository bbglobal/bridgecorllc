<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::prefix('/')->group(function () {
    
    Route::get('/', [FrontendController::class, 'home'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/employers', [FrontendController::class, 'employers'])->name('employers');
    Route::get('/candidate', [FrontendController::class, 'candidate'])->name('candidate');
    Route::get('/find-job', [FrontendController::class, 'findJob'])->name('find.job');
    Route::get('/government', [FrontendController::class, 'government'])->name('government');
    Route::get('/bridgecor-blogs', [FrontendController::class, 'blogs'])->name('blogs');
    Route::get('/research', [FrontendController::class, 'research'])->name('blogs.research');
    Route::get('/news-trends', [FrontendController::class, 'newsTrends'])->name('blogs.news.trends');
    Route::get('/legal-compliance', [FrontendController::class, 'legalCompliance'])->name('blogs.legal.compliance');
    Route::get('/hr-topics', [FrontendController::class, 'HRtopics'])->name('blogs.hr.topics');
    Route::get('/expert-advice', [FrontendController::class, 'expertAdvice'])->name('blogs.expert.advice');
    Route::get('/industry-insights-and-trends', [FrontendController::class, 'industryTrends'])->name('blogs.industry.trends');
    Route::get('/interview-success-tips', [FrontendController::class, 'interviewSuccess'])->name('blogs.interview.success');
    Route::get('/career-guidance-and-skill-development', [FrontendController::class, 'careerGuidance'])->name('blogs.career.guidance');

    Route::get('/mastering-panel-interviews-strategies-for-success-in-group-interview-settings', [FrontendController::class, 'masteringPanel'])->name('blogs.panel.interviews');
    Route::get('/mentorship-matters-the-impact-of-mentorship-on-career-development', [FrontendController::class, 'mentorship'])->name('blogs.mentorship');
    Route::get('/strategies-for-effective-time-management-insights-from-industry-experts', [FrontendController::class, 'timeManagement'])->name('blogs.time.management');
    Route::get('/cultivating-soft-skills-the-unseen-trend-in-hiring', [FrontendController::class, 'softSkills'])->name('blogs.soft.skills');
    Route::get('/navigating-the-current-job-market-trends-and-opportunities-for-career-growth', [FrontendController::class, 'trends'])->name('blogs.trends');
    Route::get('/navigating-the-current-job-market-trends-and-opportunities-for-career-growth', [FrontendController::class, 'trends'])->name('blogs.trends');
    Route::get('/nailing-the-virtual-interview-a-comprehensive-guide-to-success-in-remote-job-interviews', [FrontendController::class, 'virtualInterview'])->name('blogs.virtual.interview');
    Route::get('/navigating-online-learning-platforms-a-comprehensive-guide-to-choosing-the-right-courses', [FrontendController::class, 'platforms'])->name('blogs.platforms');
    Route::get('/crafting-a-vision-the-blueprint-for-your-professional-future', [FrontendController::class, 'visions'])->name('blogs.visions');
    Route::get('/demystifying-the-role-of-an-it-security-engineer-navigating-the-depths-of-responsibilities-and-skills', [FrontendController::class, 'demystifying'])->name('blogs.demystifying');
    Route::get('/diversity-in-the-workplace-legal-considerations', [FrontendController::class, 'diversity'])->name('blogs.diversity');
    Route::get('/the-ethical-recruiter-ensuring-compliance-in-talent-acquisition', [FrontendController::class, 'ethical'])->name('blogs.ethical');
    Route::get('/staff-augmentation-trends-what-the-future-holds', [FrontendController::class, 'staff'])->name('blogs.staff');
    Route::get('/remote-work-revolution-insights-from-the-current-market-research', [FrontendController::class, 'remote'])->name('blogs.remote');
    Route::get('/mastering-the-art-of-effective-performance-reviews-a-guide-for-growth', [FrontendController::class, 'performance'])->name('blogs.performance');
    Route::get('/demystifying-employment-laws-a-quick-reference-for-hr-professionals', [FrontendController::class, 'professionls'])->name('blogs.hr.professionlas');
    Route::get('/tech-trends-in-talent-acquisition-a-guide-for-modern-businesses', [FrontendController::class, 'tech'])->name('blogs.tech');
    Route::get('/tech-breakthroughs-how-ai-is-revolutionizing-talent-acquisition', [FrontendController::class, 'talent'])->name('blogs.talent');
    Route::get('/global-perspectives-security-clearance-jobs-in-international-settings', [FrontendController::class, 'global'])->name('blogs.global');
    Route::get('/the-role-of-soft-skills-in-cybersecurity-recruiting-a-holistic-approach-to-talent-acquisition', [FrontendController::class, 'cyber'])->name('blogs.cyber');
    Route::get('/local-heroes-exploring-the-impact-of-it-staffing-agencies-in-the-usa', [FrontendController::class, 'local'])->name('blogs.local');

    
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
   
});