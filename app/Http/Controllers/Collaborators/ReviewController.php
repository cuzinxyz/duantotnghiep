<?php

namespace App\Http\Controllers\Collaborators;

use Carbon\Carbon;
use App\Models\Comments;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\News;
use App\Models\ReplyComments;

class ReviewController extends Controller
{
    public function listReviewCar() {
        return view('collaborators.reviews.list');
    }

    public function reviewDataCar() {
        $collaborator_id = auth()->user()->id;

        $cars = Car::select(['id', 'title', 'created_at'])->where([
            'collaborator_id' => $collaborator_id,
            'status' => 1
        ])->has('comments');

        return DataTables::of($cars)
            ->addColumn(
                'view',
                function ($car) {
                    return '<a href="' . route('collaborators.reviewDetailCar', $car->id) . '" class="btn btn-warning">Xem bình luận</a>';
                }
            )->editColumn(
                'created_at',
                function ($car) {
                    return Carbon::parse($car->created_at)->diffForHumans();
                }
            )
            ->rawColumns(['view'])
            ->toJson();
    }

    public function reviewDetailCar($carID) {
        return view('collaborators.reviews.detail', compact('carID'));
    }

    public function reviewDetailCarData($carID) {
        $comments = Comments::with(['reply'])
        ->select(['id', 'user_id', 'car_id', 'body','created_at'])->where([
            'car_id' => $carID
        ]);

        return DataTables::of($comments)
            ->addColumn(
                'view',
                function ($comment) {
                    return '<a href="' . route('collaborators.viewReplyComment', $comment->id) . '" class="btn btn-warning">Xem chi tiết </a>';
                }
            )

            ->addColumn(
                'delete',
                function ($comment) {
                    return '<a href="' . route('collaborators.deleteComment', $comment->id) . '" id="deleteComment" class="btn btn-danger">Xóa bình luận </a>';
                }
            )

            ->editColumn(
                'username',
                function ($comment) {
                    return $comment->user->name;
                }
            )

            ->editColumn(
                'created_at',
                function ($comment) {
                    return Carbon::parse($comment->created_at)->diffForHumans();
                }
            )
            ->rawColumns(['view', 'delete'])
            ->toJson();
    }

    public function deleteComment($commentID) {
        $result = Comments::where('id', $commentID)->delete();

        if ($result) {
            return redirect()->back();
        }
    }

    public function viewReplyComment($replyCommentID) {
        return view('collaborators.reviews.replyDetail', compact('replyCommentID'));
    }

    public function viewReplyCommentData($replyCommentID) {
        $replyComments = ReplyComments::select(['id', 'comment_id', 'user_id', 'body', 'created_at'])->where([
            'comment_id' => $replyCommentID
        ]);

        return DataTables::of($replyComments)
            ->addColumn(
                'delete',
                function ($replyComment) {
                    return '<a href="' . route('collaborators.deleteReplyComment', $replyComment->id) . '" id="deleteComment" class="btn btn-danger">Xóa bình luận </a>';
                }
            )

            ->editColumn(
                'username',
                function ($replyComment) {
                    return $replyComment->user->name;
                }
            )

            ->editColumn(
                'created_at',
                function ($replyComment) {
                    return Carbon::parse($replyComment->created_at)->diffForHumans();
                }
            )
            ->rawColumns(['delete'])
            ->toJson();
    }

    public function deleteReplyComment($replyCommentID) {
        $result = ReplyComments::where('id', $replyCommentID)->delete();

        if($result) {
            return redirect()->back();
        }
    }


    public function listReviewNew()
    {
        return view('collaborators.news.list');
    }


    // Tin tức

    public function reviewDataNew()
    {
        $news = News::select(['id', 'title', 'created_at'])->has('comments');

        return DataTables::of($news)
            ->addColumn(
                'view',
                function ($new) {
                    return '<a href="' . route('collaborators.reviewDetailNew', $new->id) . '" class="btn btn-warning">Xem bình luận</a>';
                }
            )->editColumn(
                'created_at',
                function ($new) {
                    return Carbon::parse($new->created_at)->diffForHumans();
                }
            )
            ->rawColumns(['view'])
            ->toJson();
    }

    public function reviewDetailNew($newID)
    {
        return view('collaborators.news.detail', compact('newID'));
    }

    public function reviewDetailNewData($newID)
    {
        $comments = Comments::with(['reply'])
        ->select(['id', 'user_id', 'news_id', 'body', 'created_at'])->where([
            'news_id' => $newID
        ]);

        return DataTables::of($comments)
            ->addColumn(
                'view',
                function ($comment) {
                    return '<a href="' . route('collaborators.viewReplyCommentNew', $comment->id) . '" class="btn btn-warning">Xem chi tiết </a>';
                }
            )

            ->addColumn(
                'delete',
                function ($comment) {
                    return '<a href="' . route('collaborators.deleteNewComment', $comment->id) . '" id="deleteComment" class="btn btn-danger">Xóa bình luận </a>';
                }
            )

            ->editColumn(
                'username',
                function ($comment) {
                    return $comment->user->name;
                }
            )

            ->editColumn(
                'created_at',
                function ($comment) {
                    return Carbon::parse($comment->created_at)->diffForHumans();
                }
            )
            ->rawColumns(['view', 'delete'])
            ->toJson();
    }

    public function deleteNewComment($commentID)
    {
        $result = Comments::where('id', $commentID)->delete();

        if ($result) {
            return redirect()->back();
        }
    }

    public function viewReplyCommentNew($replyCommentID)
    {
        return view('collaborators.news.replyDetail', compact('replyCommentID'));
    }

    public function viewReplyCommentDataNew($replyCommentID)
    {
        $replyComments = ReplyComments::select(['id', 'comment_id', 'user_id', 'body', 'created_at'])->where([
            'comment_id' => $replyCommentID
        ]);

        return DataTables::of($replyComments)
            ->addColumn(
                'delete',
                function ($replyComment) {
                    return '<a href="' . route('collaborators.deleteReplyCommentNew', $replyComment->id) . '" id="deleteComment" class="btn btn-danger">Xóa bình luận </a>';
                }
            )

            ->editColumn(
                'username',
                function ($replyComment) {
                    return $replyComment->user->name;
                }
            )

            ->editColumn(
                'created_at',
                function ($replyComment) {
                    return Carbon::parse($replyComment->created_at)->diffForHumans();
                }
            )
            ->rawColumns(['delete'])
            ->toJson();
    }

    public function deleteReplyCommentNew($replyCommentID)
    {
        $result = ReplyComments::where('id', $replyCommentID)->delete();

        if ($result) {
            return redirect()->back();
        }
    }
}
