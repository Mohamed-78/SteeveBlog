<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModerationCommentaireController extends Controller
{
    public function moderation()
    {
        return view('backend.commentaire.moderation');
    }

    public function reponseCommentaire()
    {
        return view('backend.commentaire.reponse');
    }
}
