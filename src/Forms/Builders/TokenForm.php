<?php

namespace LaravelEnso\Users\Forms\Builders;

use LaravelEnso\Forms\Services\Form;
use LaravelEnso\Users\Models\User;

class TokenForm
{
    protected const TemplatePath = __DIR__.'/../Templates/token.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(self::TemplatePath);
    }

    public function create(User $user)
    {
        return $this->form
            ->routeParams(['user' => $user->id])
            ->create();
    }
}
