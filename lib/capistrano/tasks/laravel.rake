namespace :laravel do
    desc 'ajoute les permissions aux dossiers storage et bootstrap/cache'
    task :permissions do
        on roles(:web)do
          within release_path do
            execute :chmod, '777', '-R', 'storage'
            execute :chmod, '777', '-R', 'bootstrap/cache'
          end
        end
    end
end