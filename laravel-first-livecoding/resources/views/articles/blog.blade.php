<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My custom blog</title>
</head>
<body>
    <h3>
        <a href="{{ route('home') }}"> Torna alla home</a>
    </h3>

    <h3>
        <a href="{{ route('contatti') }}"> Torna ai contatti</a>
    </h3>

    <h2>Blog di {{$nome}}, {{$cognome}}</h2>

    <ul>
        @foreach ($utenti as $utente)
                <li>
                    Utente: {{ $utente }}
                    @if ($loop->odd)
                        dispara!
                    @endif
                </li>
            @endforeach
    </ul>


    <h4> {{$array1[1]}} </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium illum tenetur nesciunt delectus corporis, esse voluptate quisquam eum repellat quia ut illo impedit minima commodi officia! Quia veritatis iure similique? Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolor cupiditate omnis culpa unde quam voluptas accusamus in eum officiis modi iure optio inventore eveniet aut quia, blanditiis deleniti quas.
    Minima alias praesentium cum ipsam facilis rem, nesciunt autem sit sequi blanditiis voluptates modi, obcaecati vel aut corporis fuga harum? Amet ut perspiciatis laboriosam, porro aspernatur numquam maxime ipsa itaque.
    Vitae laborum architecto, quo ex accusamus recusandae laboriosam placeat aperiam numquam velit, doloremque autem voluptas illum quas id, eius cupiditate veritatis nesciunt quibusdam quae? Amet necessitatibus iure error dolorum optio!
    Nesciunt amet labore omnis nulla explicabo illum asperiores quia perspiciatis. Officia molestiae laboriosam expedita voluptatibus, harum molestias. Suscipit quod quibusdam, quo sapiente perferendis tempora porro molestiae! Laboriosam quidem libero nulla!
    Dolor enim quod perspiciatis voluptate maiores dolores? Vero voluptates hic nisi possimus a atque, iure consequuntur est adipisci laboriosam libero, repudiandae reprehenderit distinctio ullam beatae, cumque nihil quibusdam veniam maiores?
    Distinctio inventore iste laboriosam expedita molestias officia commodi quam optio non, rerum ea impedit reiciendis consequuntur aperiam blanditiis suscipit saepe placeat delectus? Enim sequi quam, modi adipisci distinctio facere quidem.</p>

    <h2>Blog</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium illum tenetur nesciunt delectus corporis, esse voluptate quisquam eum repellat quia ut illo impedit minima commodi officia! Quia veritatis iure similique? Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolor cupiditate omnis culpa unde quam voluptas accusamus in eum officiis modi iure optio inventore eveniet aut quia, blanditiis deleniti quas.
    Minima alias praesentium cum ipsam facilis rem, nesciunt autem sit sequi blanditiis voluptates modi, obcaecati vel aut corporis fuga harum? Amet ut perspiciatis laboriosam, porro aspernatur numquam maxime ipsa itaque.
    Vitae laborum architecto, quo ex accusamus recusandae laboriosam placeat aperiam numquam velit, doloremque autem voluptas illum quas id, eius cupiditate veritatis nesciunt quibusdam quae? Amet necessitatibus iure error dolorum optio!
    Nesciunt amet labore omnis nulla explicabo illum asperiores quia perspiciatis. Officia molestiae laboriosam expedita voluptatibus, harum molestias. Suscipit quod quibusdam, quo sapiente perferendis tempora porro molestiae! Laboriosam quidem libero nulla!
    Dolor enim quod perspiciatis voluptate maiores dolores? Vero voluptates hic nisi possimus a atque, iure consequuntur est adipisci laboriosam libero, repudiandae reprehenderit distinctio ullam beatae, cumque nihil quibusdam veniam maiores?
    Distinctio inventore iste laboriosam expedita molestias officia commodi quam optio non, rerum ea impedit reiciendis consequuntur aperiam blanditiis suscipit saepe placeat delectus? Enim sequi quam, modi adipisci distinctio facere quidem.</p>
</body>
</html>