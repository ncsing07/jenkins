pipeline {
    agent any

    stages {
        stage('clone') {
            steps {
                script {
                    def scmvars = checkout(scm)
                    echo "git details: ${scmvars}"
                }
            }
        }
    }

    post {
        success {
            githubNotify credentialsId: "ncsing07", repo: 'https://github.com/ncsing07/jenkins', account: "${GITHUB_PR_SOURCE_REPO_OWNER}", sha: "${GITHUB_PR_HEAD_SHA}", description: 'This is an example', status: 'SUCCESS'
        }
    }
}