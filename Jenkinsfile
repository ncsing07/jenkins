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
                echo "workspace directory is ${workspace}"
                // Clones the repository from the current branch name
                echo 'Cloning files from (branch: master)'
                sh 'ls -a'
                dir('$workspace/build') {
                    git branch: 'master', credentialsId: 'token2-2', url: 'https://github.com/ncsing07/hello_hapi'
                }
                
                sh 'cd $workspace/build'
                sh 'ls -a'
                sh 'docker build -t pactumjs'
                sh 'docker images'
//                 sh 'npm i'
//                 sh 'npm run test'
            }
        }
    }
}
