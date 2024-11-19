<?php

namespace App\Enum;

enum StatusEnum: string
{
    case PENDING = 'PENDENTE';
    case PROGRESS = 'EM ANDAMENTO';
    case COMPLETED = 'CONCLUIDO';
}
