<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tittle' => $this->tittle,
            'news_content' => $this->news_content,
            'created_at' => date_format($this->created_at, 'Y/M/d')
            // fungsi return ini bisa mengotak atik api resource yg akan dikirimkan ke frontend
        ];
    }
}
