<?php

namespace App\Exports;

use App\Models\Blog;
use Maatwebsite\Excel\Concerns\FromCollection;

class BlogExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Id',
            'Title',
            'Description',
            'Category_id',
            'Created_at',
            'Updated_at' 
        ];
    } 
    public function collection()
    {
        return Blog::all();
       
    }
    public function map($blog): array
    {
        // Remove HTML tags from the description
        $description = strip_tags($blog->description);

        return [
            $blog->id,
            $blog->title,
            $description,
            $blog->category_id,
            $blog->created_at,
            $blog->updated_at
        ];
    }
}
