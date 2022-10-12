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
                }
            }
        }
        
        stage('Clone Test') {
            steps {
                echo "workspace directory is ${WORKSPACE}"
                // Clones the repository from the current branch name
                echo 'Cloning files from (branch: master)'
                dir('$WORKSPACE/build') {
                    git branch: 'master', credentialsId: 'token2-2', url: 'https://github.com/ncsing07/hello_hapi'
                    sh 'ls -a'
                    echo "================================================================================="
                    sh 'docker build -t pactumjs -f $WORKSPACE/build/Dockerfile .'
                    sh 'docker images'
                    sh 'npm install --save-dev mocha'
                    sh 'npm i'
                    sh 'npm run test'
                }
            }
        }
        
        stage('Test') {
            steps {
                script {
                    def response = sh(script: 'curl http://localhost:8012/', returnStdout: true)
                    echo '=========================Response====================' + response
                }
            }
        }
    }
}
