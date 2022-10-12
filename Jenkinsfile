pipeline {
    agent any

    stages {
        stage('Clone Api') {
            steps {
                script {
                    checkout scm
                    sh 'ls -a'
                    sh 'composer install'
                    sh 'docker-compose up -d'
                    def response = sh(script: 'curl http://localhost:8012/', returnStdout: true)
                    echo '=========================Response===================' + response
                }
            }
        }
        
        stage('Clone Test') {
            steps {
                // Clones the repository from the current branch name
//                 echo 'Make the output directory'
//                 sh 'mkdir -p build'

//                 echo 'Cloning files from (branch: master)'
//                 dir('build') {
//                     git branch: 'master', credentialsId: 'token2-2', url: 'https://github.com/ncsing07/hello_hapi'
//                 }
                sh 'cd /var/www/'
                sh 'ls -a'
            }
        }
    }
}
