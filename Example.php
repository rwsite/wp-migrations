<?php
/**
 * Example Wordpress Migration
 */

namespace migrations;


final class Example extends WP_Migration
{
    public function up()
    {
        update_option('migration_example', true);
    }
}

new Example();
