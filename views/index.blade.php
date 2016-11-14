@extends(Theme::getLayout())

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, universe!</h1>
            <p>This is a Bootstrap template for a simple marketing or informational website. Use it as a starting point to create something more unique or scrap it altogether and start fresh!</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Included Templates</h2>

                <p><b>Modern</b> includes templates for various common matrix collections and pages to be used as reference. Below you will find a run down of each and what they provide.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h3>About</h3>

                <p>Showcase who you and your team are, and what you do.</p>

                <h4>Views</h4>
                <ul>
                    <li><code>about</code></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h3>Blog</h3>

                <p>What is a marketing or informational site without a blog?</p>

                <h4>Views</h4>
                <ul>
                    <li><code>blog.category</code></li>
                    <li><code>blog.index</code></li>
                    <li><code>blog.post</code></li>
                </ul>

                <h4>Features</h4>
                <span class="label label-default">Categories</span>
                <span class="label label-default">Pagination</span>
            </div>

            <div class="col-md-4">
                <h3>Portfolio</h3>

                <p>Show off your projects in this simple 3-column portfolio.</p>

                <h4>Views</h4>
                <ul>
                    <li><code>portfolio.index</code></li>
                    <li><code>portfolio.project</code></li>
                </ul>

                <h4>Features</h4>
                <span class="label label-default">Categories</span>
                <span class="label label-default">Pagination</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h3>Recipes</h3>

                <p>Useful for showcasing and documenting common tasks.</p>

                <h4>Views</h4>
                <ul>
                    <li><code>recipes.category</code></li>
                    <li><code>recipes.index</code></li>
                    <li><code>recipes.show</code></li>
                </ul>

                <h4>Features</h4>
                <span class="label label-default">Categories</span>
                <span class="label label-default">Pagination</span>
            </div>

            <div class="col-md-4">
                <h3>FAQ</h3>

                <p>Collect and maintain all of your frequently asked questions.</p>

                <h4>Views</h4>
                <ul>
                    <li><code>faq.index</code></li>
                </ul>

                <h4>Features</h4>
                <span class="label label-default">Categories</span>
            </div>

            <div class="col-md-4">
                <h3>Errors</h3>

                <p>Every site will run into errors, but it doesn't have to be ugly!</p>

                <h4>Views</h4>
                <ul>
                    <li><code>errors.404</code></li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>

                <div class="col-md-4">
                    <a href="#" class="btn btn-default btn-block">Call to Action</a>
                </div>
            </div>
        </div>
    </div>
@endsection
