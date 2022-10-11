pipeline {
    agent any

    stages {
        stage('clone') {
            steps {
                script {
                    def scmvars = checkout(scm)
                    echo "git details: ${scmvars}"

                    def environment  = docker.build 'platforms-base'

                    environment.inside {
                        stage "Update Dependencies"
                            sh "composer install || true"
                    }
                }
            }
        }
    }
}
