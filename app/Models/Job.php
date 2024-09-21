<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;
    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
    // I forgot what this tag function for or where it mentioned in other file and im scared to delete it 💀
    // Oh yea, i use it when using terminal, still idk i need to delete it 
    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate([
            'name' => $name
        ]);
        $this->tags()->attach($tag);
    }
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
