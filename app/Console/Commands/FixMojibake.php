<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class FixMojibake extends Command
{
    protected $signature = 'text:fix-mojibake {--apply : Write the fixes (default is a dry run)}';
    protected $description = 'Repair broken characters (e.g. "Â°", "â€™") in product, blog, FAQ and project text';

    private const TABLES = ['products', 'blogs', 'faqs', 'projects'];
    private const PATTERN = '/(Â|Ã|â€|â„|Å)/u';

    public function handle(): int
    {
        $found = 0;

        foreach (self::TABLES as $table) {
            if (! Schema::hasTable($table)) {
                continue;
            }

            $columns = Schema::getColumnListing($table);

            foreach (DB::table($table)->get() as $row) {
                $updates = [];

                foreach ($columns as $column) {
                    $value = $row->$column;
                    if (! is_string($value) || ! preg_match(self::PATTERN, $value)) {
                        continue;
                    }

                    $fixed = @mb_convert_encoding($value, 'Windows-1252', 'UTF-8');
                    if ($fixed === false || ! mb_check_encoding($fixed, 'UTF-8') || preg_match(self::PATTERN, $fixed)) {
                        $this->warn("{$table}.{$column} #{$row->id}: could not repair automatically");
                        continue;
                    }

                    $found++;
                    $updates[$column] = $fixed;
                    $this->line("{$table}.{$column} #{$row->id}: " . mb_substr($fixed, 0, 60));
                }

                if ($updates && $this->option('apply')) {
                    DB::table($table)->where('id', $row->id)->update($updates);
                }
            }
        }

        $this->info($this->option('apply') ? "Fixed {$found} fields." : "{$found} fields need fixing. Re-run with --apply.");

        return self::SUCCESS;
    }
}
