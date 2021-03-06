<?php

namespace App\Services;
use App\Models\Book;
use App\Models\Verse;
use Google\Cloud\Firestore\FirestoreClient;

class FirebaseService{

    public function writeToFirestore($book_id){

        try {
            $db = new FirestoreClient();

            $book = Book::find($book_id);

            $docRef = $db->collection('books')->add([
                'id' => $book->id,
                'name' => $book->name,
                'modern_name' => $book->modern_name,
                'new_testament' => $book->new_testament
            ]);
            
            dump($docRef);

            $verses = Verse::where('book_id', $book_id)->orderBy('book_id', 'asc')->get()->toArray();

            $verses_grouped = array_group_by($verses, "chapter");

            //dump($verses_grouped);

            collect($verses_grouped)->map(function($chapter) use ($docRef){
                $chapterRef = $docRef->collection('chapters')->add([
                    'id' => $chapter[0]['chapter'],
                ]);

                dump($chapter[0]['chapter']);

                $versesRef = $chapterRef->collection('verses');

                collect($chapter)->map(function($verse) use ($versesRef){
                    $versesRef->add([
                        'verse' => $verse['verse'],
                        'text' => $verse['text']
                    ]);
                });
            });

            // $verses_chunk = Verse::where('book_id', $book_id)->orderBy('book_id', 'asc')->chunk(3000, function ($verses) use ($docRef, $book, $db){
            //     //$batch = $db->batch();
            //     $verses_ref = $docRef->collection('verses');
            //     dump($verses_ref);
            //     $verses_mapped = collect($verses)->map(function ($verse) use ($docRef, $verses_ref){

            //         $verses_ref->add([
            //             'book_id' => $verse->book_id,
            //             'book_reference' => $docRef->id(),
            //             'chapter' => $verse->chapter,
            //             'verse' => $verse->verse,
            //             'text' => $verse->text
            //         ]);

            //         return $verse;
            //     })->all();

            //     //dump($batch);
            //     //$batch->commit();
                
            // });


        } catch (\Exception $e){
            return [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }

        
    }
}