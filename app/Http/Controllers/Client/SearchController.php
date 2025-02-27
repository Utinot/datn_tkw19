<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Jobskill;
use App\Models\Lever;
use App\Models\location;
use App\Models\Majors;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\Timework;
use App\Models\Wage;
use App\Models\WorkingForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use stdClass;

class SearchController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public Job $job;
    public Jobskill $jobskill;
    public Majors $majors;
    public location $location;
    public WorkingForm $workingform;
    public Lever $lever;
    public Experience $experience;
    public Wage $wage;
    public Skill $skill;
    public Timework $timework;
    public Profession $profession;


    public function __construct(Wage $wage, Experience $experience, Majors $majors, location $location, WorkingForm $workingform, Lever $lever, Profession $profession, Job $job, Jobskill $jobskill, Skill $skill, Timework $timework)
    {
        $this->job = $job;
        $this->jobskill = $jobskill;
        $this->majors = $majors;
        $this->lever = $lever;
        $this->experience = $experience;
        $this->wage = $wage;
        $this->skill = $skill;
        $this->timework = $timework;
        $this->profession = $profession;
        $this->job = $job;
        $this->jobskill = $jobskill;
        $this->majors = $majors;
        $this->location = $location;
        $this->workingform = $workingform;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $breadcrumbs = [
            'Tìm kiếm việc làm ' . $request->key
        ];
        try {
            $newSizeLimit = $this->newListLimit($request);
            $that = $request;
            $data = $this->job
                ->join('job_skill', 'job_skill.job_id', '=', 'job.id')
                ->join('skill', 'job_skill.skill_id', '=', 'skill.id')
                ->Where(function ($q) use ($that) {
                    $q->orWhere($this->escapeLikeSentence('job.title', $that->key))
                        ->orWhere(function ($q) use ($that) {
                            $q->whereIn('job_skill.skill_id', $that->skill);
                        })
                        ->orWhere(
                            'job.location_id',
                            $that->location_id
                        )
                        ->orWhere(
                            'job.profession_id',
                            $that->profession
                        )
                        ->orWhere(
                            'job.experience_id',
                            $that->experience
                        )
                        ->orWhere(
                            'job.time_work_id',
                            $that->timework
                        )
                        ->orWhere(
                            'job.wk_form_id',
                            $that->workingform
                        )
                        ->orWhere(
                            'job.majors_id',
                            $that->majors
                        )
                        ->orWhere(
                            'job.level_id',
                            $that->lever
                        )
                        ->orWhere(
                            'job.majors_id',
                            $that->majors
                        );
                })
                ->distinct()
                ->with(['getLevel', 'getExperience', 'getWage', 'getprofession', 'getlocation', 'getMajors', 'getwk_form', 'getTime_work', 'getskill'])
                ->select('job.*')
                ->get();
            return view('client.search', [
                'job' => $data,
                'breadcrumbs' => $breadcrumbs,
                'profestion' => $this->getprofession(),
                'lever' => $this->getlever(),
                'experience' => $this->getexperience(),
                'wage' => $this->getwage(),
                'skill' => $this->getskill(),
                'timework' => $this->gettimework(),
                'profession' => $this->getprofession(),
                'majors' => $this->getmajors(),
                'workingform' => $this->getworkingform(),
                'location' => $this->getlocation(),
                'request' => $request->all() ?? new stdClass,
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show(Request $request, $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}