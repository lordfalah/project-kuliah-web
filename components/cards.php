<?php 
    $dataImg = [
        ["nameImg" => "https://source.unsplash.com/400x350?activity/1", "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, alias"],
        ["nameImg" => "https://source.unsplash.com/400x350?activity/2", "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, alias"],
        ["nameImg" => "https://source.unsplash.com/400x350?activity/3", "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, alias."],
        ["nameImg" => "https://source.unsplash.com/400x350?activity/4", "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, alias."],
        ["nameImg" => "https://source.unsplash.com/400x350?activity/5", "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, alias."],
        ["nameImg" => "https://source.unsplash.com/400x350?activity/6", "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, alias."],
        ["nameImg" => "https://source.unsplash.com/400x350?activity/7", "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, alias."],
        ["nameImg" => "https://source.unsplash.com/400x350?activity/8", "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, alias."],
        ["nameImg" => "https://source.unsplash.com/400x350?activity/9", "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, alias."]
    ];
?>


<section>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <?php foreach($dataImg as $key=>$data): ?>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                <div class="w-100 card shadow">
                    <img src=<?php echo $data['nameImg'] ?> class="w-100 rounded-top">
                    <div class="card-body bg-dark text-white text-center rounded-bottom">
                        <h5 class="font-weight-bolder card-title">Kegiatan <?php echo $key + 1;?></h5>
                        <p class="card-text"><?php echo $data["body"] ?></p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>

        <div class="pagination my-5 d-flex">
            <nav aria-label="Page navigation example" class="mx-auto">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link btn btn-secondary" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link btn btn-secondary" href="#">1</a></li>
                    <li class="page-item"><a class="page-link btn btn-secondary" href="#">2</a></li>
                    <li class="page-item"><a class="page-link btn btn-secondary" href="#">3</a></li>
                    <li class="page-item"><a class="page-link btn btn-secondary" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>