<?php

namespace App\Livewire\Sequence;

use Livewire\Component;
use App\Models\Sequence;

class Page extends Component
{

    public $sequences, $sequence, $category, $account_vot, $sequence_id;
    public $updateMode = false;
    public function render()
    {
        $this->sequences = Sequence::latest()->get();
        return view('livewire.sequence.page')
            ->extends('layouts.app')
            ->section('content');;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->sequence = '';
        $this->category = '';
        $this->account_vot = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedData = $this->validate([
            'sequence' => 'required',
            'category' => 'required',
            'account_vot' => 'required',
        ]);

        Sequence::create($validatedData);

        session()->flash('message', 'Sequence Created Successfully.');

        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $sequence = Sequence::findOrFail($id);
        $this->sequence_id = $id;
        $this->sequence = $sequence->sequence;
        $this->category = $sequence->category;
        $this->account_vot = $sequence->account_vot;

        $this->updateMode = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedData = $this->validate([
            'sequence' => 'required',
            'category' => 'required',
            'account_vot' => 'required',
        ]);

        $sequence = Sequence::find($this->sequence_id);
        $sequence->update([
            'sequence' => $this->sequence,
            'category' => $this->category,
            'account_vot' => $this->account_vot,

        ]);

        $this->updateMode = false;

        session()->flash('message', 'Sequence Updated Successfully.');
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Sequence::find($id)->delete();
        session()->flash('message', 'Sequence Deleted Successfully.');
    }
}
