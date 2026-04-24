<?php
use App\Models\Article;
use Livewire\Component;

new class extends Component
{
    public $count = 0;

    public function mount()
    {
        sleep(3);
        $this->count = Article::where('published',1)->count();
    }

    public function placeholder()
    {
        return view('placeholder',[
            'message'=> 'Published cont is loading'
        ]);
    }
};
?>

<div>
Published: {{$count}}


</div>
