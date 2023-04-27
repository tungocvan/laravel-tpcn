<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAndMoveModel extends Command
{
    protected $signature = 'create:model {name} {path}';

    protected $description = 'Create a new model and move it to the specified directory';

    public function handle()
    {
        $name = $this->argument('name');
        $path = $this->argument('path');
        if (!is_dir(realpath($path))) {
            // đường dẫn không tồn tại hoặc không phải là một thư mục
            // xử lý lỗi tại đây
            // ví dụ: throw new Exception("Đường dẫn không tồn tại");
            $this->info("Đường dẫn không tồn tại: {$path}");
        } else {
            $this->call('make:model', [
                'name' => $name,
            ]);

            // Di chuyển model đến thư mục chỉ định
            $this->moveModel($name, $path);
        }

        //$modulename = explode('/', $path);
        //dd($modulename);
        // Tạo model
    }

    private function moveModel($name, $path)
    {
        $modelPath = app_path("Models/{$name}.php");
        $newPath = base_path($path) . "/{$name}.php";

        // Di chuyển model
        rename($modelPath, $newPath);

        // Đọc nội dung file model
        $content = file_get_contents($newPath);
        // Thay đổi namespace của model bằng đường dẫn mới
        $newNamespace = str_replace('/', '\\', $path);
        $content = str_replace('namespace App\Models;', "namespace {$newNamespace};", $content);
        file_put_contents($newPath, $content);

        $this->info("Model {$name} created and moved to {$newPath}");
    }
}
