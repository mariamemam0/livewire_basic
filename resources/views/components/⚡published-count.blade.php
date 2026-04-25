<?php
use App\Models\Article;
use Livewire\Component;

new class extends Component
{
    #[\Livewire\Attributes\Lazy]
    public $placeholderText = '';
#[\Livewire\Attributes\Computed(cache:true, key:'published-count')]
    public function count()
    {
        sleep(1);
        return Article::where('published',1)->count();
    }

    public function placeholder()
    {
        return view('components.placeholder',[
            'message'=> $this->placeholderText,
        ]);
    }
};
?>

<span>
{{$this->count}}


</span>
