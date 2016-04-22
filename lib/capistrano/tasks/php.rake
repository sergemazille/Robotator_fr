namespace :php do
    desc 'Installation des dépendances de Composer'
    task :composer do
        on roles(:web)do
          within release_path do
            execute :composer, :install
          end
        end
    end

    desc 'Redémarre Nginx'
    task :restartNginx do
        on roles(:web) do
            sudo '/etc/init.d/nginx', :restart
        end
    end
end