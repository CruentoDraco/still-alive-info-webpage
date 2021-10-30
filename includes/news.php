<div class="section bg-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 min-h-100">&nbsp;</div>
            <div class="col-md-1">&nbsp;</div>
            <div class="col-md-6">
                <div class="card news-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                <?php
                                    use Instagram\Api;
                                    use Symfony\Component\Cache\Adapter\FilesystemAdapter;
                                    $cachePool = new FilesystemAdapter('Instagram', 0, __DIR__ . '/../cache');
                                    $api = new Api($cachePool);
                                    $api->login('The._.GangGang', 'F4R F0RTNÄ8T'); // mandatory
                                    $profile = $api->getProfile('robertdowneyjr');
                                    echo $profile->getUserName(); // robertdowneyjr
                                    echo $profile->getFullName();
                                ?>
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                &nbsp;
            </div>
        </div>
    </div>    
</div>
<hr class="line end-1">