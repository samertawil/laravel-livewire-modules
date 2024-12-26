* composer require laravel-livewire/uc-modules:dev-main

* composer update laravel-livewire/uc-modules

* uc\modules\UcModulesServiceProvider::class,

*  php artisan vendor:publish --provider="uc\modules\UcModulesServiceProvider"

*  include __DIR__.'/user.php';

 *                ,
        "files": [
            "app/helper/uploads.php",
            "app/helper/generalfunctions.php"
        ]
		
* composer dump-autload;

* php artisan vendor:publish --provider="uc\modules\UcModulesServiceProvider" --tag="userModel" --force