<?php

namespace App\Http\Resources\User\Images;

use Illuminate\Http\Resources\Json\JsonResource;

class IndexImagesResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray($request)
  {
    return [
      "id" => $this->id,
      "path" => $this->path,
    ];
  }
}
