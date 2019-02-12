<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  /**
   * @var array
   */
  protected $fillable = [];

  /**
   * @var array
   */
  protected $appends = [
    'url'
  ];

  /**
   * @var array
   */
  protected $hidden = [];

  /**
   * @var array
   */
  protected $with = ['children'];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function parent()
  {
    return $this->belongsTo('App\Models\Category');
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function children()
  {
    return $this->hasMany('App\Models\Category', 'parent_id');
  }

  /**
   * @return string
   */
  public function getUrlAttribute()
  {
    return route('category', ['id' => $this->id]);
  }
}