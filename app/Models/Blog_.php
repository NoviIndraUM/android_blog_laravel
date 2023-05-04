<?php

namespace App\Models;

class Blog 
{
   static $blog_post =  [
       [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Novi Indra Fanani",
            "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem rerum, dolor doloribus quo tempore perferendis, quae consectetur quasi molestias sunt nesciunt voluptas distinctio illum saepe id odio natus, nostrum dolore totam dicta pariatur sit! Voluptas eveniet excepturi nihil delectus? Repellat fugiat dolores deleniti dicta eveniet, similique fugit aspernatur modi earum non unde atque. Veritatis quis illo nobis repellat eius! Numquam quas, iure amet, perferendis esse fugiat eum officiis minus mollitia reprehenderit repellat ad, facere nihil placeat inventore qui! Quibusdam, quis?"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Pulu Pulu",
            "body"  => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit magni dicta accusamus dolores soluta amet ratione neque, praesentium possimus rem voluptas fuga blanditiis totam hic repellat eos exercitationem tempore odio accusantium. Iure magni dolor, dolorum, voluptatibus laborum quasi quibusdam quidem aut at beatae tempore quaerat nemo, doloremque ipsa vel. Dicta debitis, minima vel illum quibusdam magni non doloremque ipsa ad alias tenetur minus voluptates recusandae fugiat itaque natus voluptatibus quaerat nisi necessitatibus harum! Velit ipsum dolor dolorum praesentium ex laudantium vero pariatur eveniet blanditiis aliquid, et voluptatem doloribus rem minima unde sit repellendus nobis impedit quisquam nesciunt. Temporibus, praesentium modi. Veniam sunt, hic impedit quam sit fugiat nostrum laudantium ducimus aliquam reprehenderit nemo ut magnam? Perferendis eius magnam deleniti sint."
        ],
        [
            "title" => "Post Ketiga",
            "slug" => "post-ketiga",
            "author" => "Pulu Peng Peng",
            "body"  => "Lorem ipsum dolor sit amet. Fugit magni dicta accusamus dolores soluta amet ratione neque, praesentium possimus rem voluptas fuga blanditiis totam hic repellat eos exercitationem tempore odio accusantium. Iure magni dolor, dolorum, voluptatibus laborum quasi quibusdam quidem aut at beatae tempore quaerat nemo, doloremque ipsa vel. Dicta debitis, minima vel illum quibusdam magni non doloremque ipsa ad alias tenetur minus voluptates recusandae fugiat itaque natus voluptatibus quaerat nisi necessitatibus harum! Velit ipsum dolor dolorum praesentium ex laudantium vero pariatur eveniet blanditiis aliquid, et voluptatem doloribus rem minima unde sit repellendus nobis impedit quisquam nesciunt. Temporibus, praesentium modi. Veniam sunt, hic impedit quam sit fugiat nostrum laudantium ducimus aliquam reprehenderit nemo ut magnam? Perferendis eius magnam deleniti sint."
        ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $blogs = static::all();
        return $blogs->firstWhere('slug', $slug);
    }
}
