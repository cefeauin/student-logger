<?php

namespace App\Livewire;

use App\Models\Attendance;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\View;
use Livewire\WithPagination;

class Attendances extends Component
{
    use WithPagination;

    public $search = "";
    public $selectedPosts = [];
    public $selectedStatuses = [];


    public function render()
    {
        View::share('page', 'attendances');

        return view('livewire.attendances', [
            'attendances' => Attendance::select('id', 'logged_in_at', 'logged_out_at', 'status', 'card_id', 'post_id')
                ->with([
                    'card' => fn ($query) => $query->select('id', 'profile_photo', 'student_id'),
                    'post' => fn ($query) => $query->select('id', 'name'),
                    'card.student' => fn ($query) => $query->select('id', 'student_no', 'last_name', 'first_name'),
                ])
                ->when(
                    $this->search,
                    fn ($query) =>
                    $query->whereHas(
                            'card',
                            fn ($subquery) =>
                            $subquery->search($this->search)
                        )
                        ->orWhereHas(
                            'card.student',
                            fn ($subquery) =>
                            $subquery->search($this->search)
                        )
                )
                ->whereHas(
                    'post',
                    fn ($query) =>
                    $query->when(
                        $this->selectedPosts,
                        fn ($subquery) =>
                        $subquery->postIn($this->selectedPosts)
                    )
                )
                ->when(
                    $this->selectedStatuses,
                    fn ($query) =>
                    $query->statusIn($this->selectedStatuses)
                )
                ->orderBy('updated_at', 'desc')
                ->paginate(15),
            'posts' => Post::all(),
        ]);
    }
}