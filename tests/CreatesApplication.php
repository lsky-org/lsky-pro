<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    private function ensureTestingSqliteDatabaseExists(): void
    {
        if ((string) getenv('APP_ENV') !== 'testing') {
            return;
        }

        if ((string) getenv('DB_CONNECTION') !== 'sqlite') {
            return;
        }

        $database = (string) getenv('DB_DATABASE');
        if ($database === '' || $database === ':memory:') {
            return;
        }

        $directory = dirname($database);
        if (! is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        if (! file_exists($database)) {
            touch($database);
        }
    }

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $this->ensureTestingSqliteDatabaseExists();

        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
