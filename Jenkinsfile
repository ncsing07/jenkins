pipeline {
    agent any

    stages {
        stage('Build Api') {
            steps {
                script {
                    checkout scm
                    sh 'ls -a'
                    sh 'composer install'
                    sh 'docker-compose build'
                    sh 'docker-compose up -d'
                    sh 'docker ps'
                    echo "=================================================================================="
                    sh 'php -v'
                    echo "=================================================================================="
//                     sh 'docker exec -i php_yii2 php yii migrate --interactive=0'
                }
            }
        }
        
        stage('Build Test') {
            steps {
                // Clones the repository from the current branch name
                echo 'Cloning files from (branch: master)'
                dir('$WORKSPACE/build') {
                    git branch: 'master', credentialsId: 'token2-2', url: 'https://github.com/ncsing07/hello_hapi'
                    sh 'docker build -t pactumjs -f $WORKSPACE/build/Dockerfile .'
                    sh 'docker images'
                    sh 'npm install --save-dev mocha'
                    sh 'npm i'
                }
            }
        }
        
        stage('Run Test') {
            steps {
                script {
                    dir('$WORKSPACE/build') {
                        sh 'ls -a'
                        sh 'docker exec -i php_yii2 php yii migrate --interactive=0'
                        echo "================================================================================="
                        sh 'ENVIRONMENT=staging npm run test'
                    }
                }
            }
        }
    }
    
    post {
        always {
//             script{
//                 def doc_containers = sh(returnStdout: true, script: 'docker container ps -aq').replaceAll("\n", " ") 
//                 if (doc_containers) {
//                     sh "docker kill ${doc_containers}"
//                     sh 'docker ps'
//                 }
//             }
//             sh 'docker-compose down'
//             sh 'docker rm -f $(docker ps -a -q)'
//             sh 'docker volume rm $(docker volume ls -q)'
            sh 'docker ps -aq | xargs docker stop | xargs docker rm'
            sh 'docker ps'
        }
    }
}
