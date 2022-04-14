<div class="col-4">
    <a href={{'/product_details/'.$products[$num]->id}}>
        <img src={{asset("productImages/".$products[$num]->picture_1.".jpg")}}>
    </a>
    <a href={{'/product_details/'.$products[$num]->id}}>
        <h4>{{$products[$num]->product_name}}</h4>
    </a>
    <div class="rating">{{$products[$num]->product_rating}}/100</div>
    <p>${{$products[$num]->product_price}}</p>
</div>