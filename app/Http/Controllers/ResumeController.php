<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Symfony\Component\HttpFoundation\Response;

class ResumeController extends Controller
{
    public function __invoke(): Response
    {
        $pdf = Pdf::loadView('resume')
            ->setPaper('a4')
            ->setOption('defaultFont', 'DejaVu Sans');

        return $pdf->download(__('resume.filename'));
    }
}
