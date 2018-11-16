@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <aside class="col-md-3">
            <h1>Dashboard</h1>
            <ul>
                <li>Home</li>
                <li>Create Posts</li>
                <li>Logout</li>
            </ul>
        </aside>
        <main class="col-md-9">
            <header>
                <h1>{{ Auth::user()->name }}</h1>
            </header>
            <section>
                <article>
                    <header>
                        <h2>This is a title</h2>
                    </header>
                    <section>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu nulla justo. Vestibulum ut neque erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac nibh laoreet, accumsan ex non, cursus arcu. Maecenas at dignissim libero. Sed mattis rutrum metus, quis lobortis augue accumsan sit amet. Etiam sit amet efficitur eros, et aliquet felis. Aenean iaculis est ante, in convallis eros commodo non. Donec felis nisl, vulputate vel pharetra eget, semper non risus. Fusce sit amet ultrices elit. Quisque sollicitudin, neque vel lobortis scelerisque, nulla arcu placerat nisl, at mollis nisl nisl eu mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque scelerisque felis quis dolor egestas commodo. Vestibulum ut tellus eget nisi pretium blandit sit amet at velit. Suspendisse potenti.</p>
                    </section>
                </article>
                <article>
                    <header>
                        <h2>This is a title</h2>
                    </header>
                    <section>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu nulla justo. Vestibulum ut neque erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac nibh laoreet, accumsan ex non, cursus arcu. Maecenas at dignissim libero. Sed mattis rutrum metus, quis lobortis augue accumsan sit amet. Etiam sit amet efficitur eros, et aliquet felis. Aenean iaculis est ante, in convallis eros commodo non. Donec felis nisl, vulputate vel pharetra eget, semper non risus. Fusce sit amet ultrices elit. Quisque sollicitudin, neque vel lobortis scelerisque, nulla arcu placerat nisl, at mollis nisl nisl eu mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque scelerisque felis quis dolor egestas commodo. Vestibulum ut tellus eget nisi pretium blandit sit amet at velit. Suspendisse potenti.</p>
                    </section>
                </article>
                <article>
                    <header>
                        <h2>This is a title</h2>
                    </header>
                    <section>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu nulla justo. Vestibulum ut neque erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac nibh laoreet, accumsan ex non, cursus arcu. Maecenas at dignissim libero. Sed mattis rutrum metus, quis lobortis augue accumsan sit amet. Etiam sit amet efficitur eros, et aliquet felis. Aenean iaculis est ante, in convallis eros commodo non. Donec felis nisl, vulputate vel pharetra eget, semper non risus. Fusce sit amet ultrices elit. Quisque sollicitudin, neque vel lobortis scelerisque, nulla arcu placerat nisl, at mollis nisl nisl eu mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque scelerisque felis quis dolor egestas commodo. Vestibulum ut tellus eget nisi pretium blandit sit amet at velit. Suspendisse potenti.</p>
                    </section>
                </article>
            </section>
        </main>
    </div>
</div>
@endsection
