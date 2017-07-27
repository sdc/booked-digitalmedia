# config valid only for current version of Capistrano
lock "3.8.2"

set :application, "booked-digitalmedia"
set :repo_url, "git@github.com:sdc/booked-digitalmedia.git"
set :keep_releases, 5

# Default branch is :master
# ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp
set :branch, "master"

# Default deploy_to directory is /var/www/my_app_name
set :deploy_to, "/srv/booked-digitalmedia"

# Default value for :format is :airbrussh.
# set :format, :airbrussh

# You can configure the Airbrussh format using :format_options.
# These are the defaults.
# set :format_options, command_output: true, log_file: "log/capistrano.log", color: :auto, truncate: :auto

# Default value for :pty is false
# set :pty, true

# Default value for :linked_files is []
# append :linked_files, "config/database.yml", "config/secrets.yml"
append :linked_files, "config/config.php"

# Default value for linked_dirs is []
# append :linked_dirs, "log", "tmp/pids", "tmp/cache", "tmp/sockets", "public/system"
append :linked_dirs, "tpl_c"

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for local_user is ENV['USER']
# set :local_user, -> { `git config user.name`.chomp }

# Default value for keep_releases is 5
# set :keep_releases, 5

#after "deploy:finalize_update" do
#  run "sudo chown -R www-data:www-data #{latest_release}/tpl_c"
#end

#namespace :deploy do
#  desc "Fix tpl_c writeable"
#   task :fix_tpl_c do
#     run "#{sudo} chmod -R 0777 #{latest_release}/tpl_c"
#   end
#  before "deploy:cleanup", :fix_tpl_c
#end
#  after "deploy:finalize_update", :fix_tpl_c
