@extends('layout.layout')

@section('explore')


<div class="container py-4">
    <div class="">
        <div class="">
            <h1>
                Explore
            </h1>
        </div>

        <p>
            When you execute this command, Laravel will write a "schema" file to your application's database/schema
            directory. The schema file's name will correspond to the database connection. Now, when you attempt to
            migrate your database and no other migrations have been executed, Laravel will first execute the SQL
            statements in the schema file of the database connection you are using. After executing the schema file's
            SQL statements, Laravel will execute any remaining migrations that were not part of the schema dump.

            If your application's tests use a different database connection than the one you typically use during local
            development, you should ensure you have dumped a schema file using that database connection so that your
            tests are able to build your database. You may wish to do this after dumping the database connection you
            typically use during local development:
        </p>
    </div>
</div>
@endsection