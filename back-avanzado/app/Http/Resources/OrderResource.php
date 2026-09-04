<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            /*
            {'id': 1,
            'total': 89.99,
            'status': 'pending',
            'client': 1,
            }
            
            // en caso de mock, se define previamente cómo lucirá antes de terminar la lógica de negocio

            */
            'id' => $this->id, 'total' => $this->total, 'estatus' => $this->status,
            'usuario' => $this->whenLoaded('user', fn() => $this->user->email),
        ];
        }
}
