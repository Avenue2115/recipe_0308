<div class="card" style="width: 18rem;">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#868e96"/>
        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
    </svg>
    <div class="card-body">
        <h5 class="card-title">
            {{ optional($recipe)->title }}
        </h5>
        <p class="card-text">
            {{ optional($recipe)->description }}
        </p>
        <a href="/RecipeSummary/{{ optional($recipe)->id }}" class="btn btn-primary">description</a>
    </div>
</div>
