<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
	protected $table = 'researchs';

	 protected $fillable = [

		        'user_id',
            'title_research',
            'purpose',
            'sector_id',
            'case_study',
            'abstraction',
            'guarantor',
            'regency_id',
            'reqstat_id',
            'rescstat_id',
            'description_data_requested',
            'proposal_file',
            'research_file',
    ];
  
      public function user()
  {
      return $this->belongsTo(User::class);
  }
      public function sector()
  {
      return $this->belongsTo(Sector::class);
  }
      public function regency()
  {
      return $this->belongsTo(Regency::class);
  }
      public function reqstat()
  {
      return $this->belongsTo(Reqstat::class);
  }
      public function rescstat()
  {
      return $this->belongsTo(Rescstat::class);
  }
}
