<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class AddMiddlewareKernel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:middleware {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = ucfirst($this->argument('name'));
        $methodName = strtolower($name);
        //$kernelFile = app_path('Http/Kernel.php');
        $kernelFile = 'modules/ModuleServiceProvider.php';
        if (!File::exists($kernelFile)) {
            $this->error('Kernel.php file not found!');
            return;
        }
        $content = file_get_contents($kernelFile);
        //protected $routeMiddleware = [

        $find = strstr($content, "{$methodName}.middleware", true);
        if (!$find) {
            $foundString = 'add middleware';
            $newString = "\n        '{$methodName}.middleware' => \\Modules\\{$name}\src\Http\Middlewares\\{$name}::class,";
            $content = str_replace($foundString, $foundString . $newString, $content);
            file_put_contents($kernelFile, $content);
        }
        $this->info('Middleware added successfully!');
        return 0;
    }
}
