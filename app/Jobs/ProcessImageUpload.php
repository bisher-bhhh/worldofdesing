<?php

namespace App\Jobs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Image;

class ProcessImageUpload implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $image;
    protected $imagePath;

    public function __construct($image, $imagePath)
    {
        $this->image = $image;
        $this->imagePath = $imagePath;
    }

    public function handle()
    {
// Resize image
        $resizedImage = Image::make($this->image)->resize(800, 600, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

// Save the resized image
        $resizedImage->save($this->imagePath, 80); // Reduce quality to save space and time
    }
}