<?php

namespace App\Actions;

use App\Models\Yap;

class StoreYapAction
{
    /**
     * Store a newly created resource in storage.
     */
    public function execute(array $data): Yap
    {
        return Yap::create([
            'content' => $data['content'],
            'user_id' => $data['user_id'],
        ]);
    }
}
